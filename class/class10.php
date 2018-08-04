<?php



	class Computer {

		protected $name = '联想';

		protected function _run() {
			echo '联想运行中......';
		}
	}

	class noteComputer extends Computer {

		public function get() {
			echo $this -> name.'<br />';
			$this -> _run();
		}			
		
	}

	$noteComputer1 = new noteComputer();
	
	$noteComputer1 -> get();

	//类外的不能通过实例化子类直接访问在父类中继承的受保护属性和方法，
	//只能在子类中访问在父类继承的属性和方法，但是可以在子类中写一个接口函数，
	//子类中的函数访问在父类中继承的属性和方法，从而可以在类外间接的通过
	//访问子类的方法来访问父类中受保护的属性和方法






?>