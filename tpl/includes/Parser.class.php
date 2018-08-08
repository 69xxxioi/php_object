<?php

	//模板解析类
	class Parser {

		//保存模板内容
		public $_tpl;
		//构造方法，用于获取模板文件里的内容
		public function __construct($_tplFile) {
			if(!$this->_tpl = file_get_contents($_tplFile)) {
				exit('ERROR:模板文件读取错误！');
			}
		}
		//对外公共方法
		public function compile($_parFile) {
			//解析模板内容
			
			//生成编译文件
			if(!file_put_contents($_parFile,$this->_tpl)) {
				exit('ERROR:便以文件生成出错！');
			}
		}
	}



?>