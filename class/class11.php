<?php
	

	class Computer {

		public $name = '联想';

		public function _run() {
			echo '联想运行中......<br/>';
		}
	}

	class noteComputer extends Computer {

		//这里的子类已经继承并重写了父类的方法，
		//但是有时候我们又希望调用父类的(继承父类的)方法，
		//那么我们怎么办呢？
		//我们可以这样做   父类::方法) parent::方法
		public $name = 'DELL';

		public function _run() {
			echo 'DELL  正在运行中......<br/>';
			//父类::方法  parent::方法
			parent::_run();
		}

	}

	$noteComputer1 = new noteComputer();
	echo $noteComputer1 -> name.'<br/>';
	$noteComputer1 -> _run();









?>