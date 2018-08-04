<?php

	//主类,控制界面载入，处理数据
	class Main {
		private $_index;
		private $_send;


		//构造方法，用来初始化数据用的
		public function __construct($_index = '') {
			$this->_index = $_index;
			if(isset($_POST['send'])) {
				$this->_send = $_POST['send'];
			}
		}

		public function _run() {
			echo $this->_send();

			//载入界面
			include $this->_ui();
		}

		//载入界面
		private function _ui() {
			if (empty($this->_index) || !file_exists($this->_index.'.inc.php')) {
				$this->_index = 'start';
			}
			return $this->_index.'.inc.php';
		}

		//创建一个方法来接收登录和注册的操作
		private function _send() {
			return $this->_send;
		}
	}



?>