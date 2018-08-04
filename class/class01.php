<?php
	
	class Computer {

		public $_name = '联想';
		public $_model ='i7';

		public function _run() {
			echo "hello world!";
		}
	}

	$computer1 = new Computer(); #实例化computer1对象
	echo $computer1 -> _name;
	echo $computer1 -> _model.'<br/>';
	$computer1 -> _run();

?>