<?php
	
	class Computer {

		private $_name = '联想';

		//设置一个公共函数，通过公共函数这个接口间接访问私有属性
		public function _fun() {
			return $this -> _name;
		}
	}

	$computer1 = new Computer();

	//私有（private）属性，类外不能直接访问,但是可以空过类内的共有方法来间接访问私有属性
	//$computer1 -> _name;
	
	$_name = $computer1 -> _fun();
	echo $_name;

?>