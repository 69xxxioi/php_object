<?php
	


	//模板类
	class Templates {

		//我们想通过一个字段类接收变量，但又不知道有多少变量，
		//所以我们要动态的接收变量，可以通过数组来实现
		private $_vars = array();

		//创建以个构造方法来验证各个目录是否存在
		public function __construct() {
			if(!is_dir(TPL_DIR) || !is_dir(TPL_C_DIR) || !is_dir(CACHE)) {
				exit('ERROR:模板目录或编译目录或缓存目录不存在！请手工设置！');
			}
		}

		//assign()方法用于注入变量
		public function assign($_var,$_value) {
			//$_var用于同步模板中的变量名，例如index.php中传过来的变量
			//名是name，那么index.tpl就是{$name}
			//$_value值表示的是index.php里的$_name的值,就是田力
			if (isset($_var) && !empty($_var)) {
				$this->_var[$_var] = $_value;
			} else {
				echo 'ERROR：请设置模板变量';
			}
		}

		//创建display()方法
		public function display($_file) {	
			//设置模板的路径
			$_tplFile  = TPL_DIR.$_file;
			//判断模板是否存在
			if(!file_exists($_tplFile)) {
				exit('ERROR：模板不存在！');
			}
			//生成编译文件
			$_parFile = TPL_C_DIR.md5($_file).$_file.'.php';
			if(!file_exists($_parFile) || filemtime($_tplFile) > filemtime($_parFile)) {
				//判断编译文件存在否，如果不存在则生成编译文件，如果存在就不在生成
				//同时判断模板文件是否被修改，如果被修改就重新生成编译文件，如果没有被修改就不用再生成编译文件
				//怎么判断模板文件有没有被修改呢？通过比较模板文件的修改时间来判断文件有没有被修改的
				//引入模板解析类
				require ROOT_PATH.'/includes/Parser.class.php';
				$_parser = new Parser($_tplFile);
				$_parser->compile($_parFile);

			}
			//载入编译文件
			include $_parFile;
		}
	}


?>