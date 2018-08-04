<?php

	class Computer{

		private $_name;
		private $_modle;
		private $_cpu;

		//这里的两个拦截器虽然是私有的，但是类外同样能在类外访问私有有属性，
		//是因为类外面根本就没有调通这两个私有方法（拦截器），那为什么类外
		//同样可以对类内的私有属性进行了赋值并取值呢？是因为当类外对类内的
		//私有属性进行进行操作时，拦截器就会拦截并自动进行对私有属性进行赋
		//值取值操作，拦截器的调用并不是类外的调用，而是在类内的调用的。
		public function __set($_key,$_value) {
			$this -> $_key = $_value;
		}

		public function __get($_key) {
			return $this -> $_key.'<br />';
		}
	}



	$computer1 = new Computer();
	
	$computer1 -> _name = '联想'; 
	echo $computer1 -> _name;
	
	$computer1 -> _modle = 'i7';
	echo $computer1 -> _modle;
	
	$computer1 -> _cpu = '四核';
	echo $computer1 -> _cpu;



?>