<?php

/*	
	//继承
	class Computer {

		public $name = '联想';

		public function _run() {
			echo '联想运行中......';
		}
	}

	class noteComputer extends Computer {

	}

	$noteComputer1 = new Computer();
	$noteComputer1 -> _run();*/

	class Computer {

		public $name = '联想';

		public function _run() {
			echo '联想运行中......';
		}
	}

	class noteComputer extends Computer {

		//子类的不需要继承父类的字段和方法，那么可以采用重写的方法覆盖父类的字段和方法
		public $name = 'DELL';

		public function _run() {
			echo 'DELL  正在运行中......';
		}

	}

	$noteComputer1 = new noteComputer();
	echo $noteComputer1 -> name.'<br/>';
	$noteComputer1 -> _run();






?>
