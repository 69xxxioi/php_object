<?php

	class Computer{

		private $_name;
		private $_modle;
		private $_cpu;

		//拦截器__set(),__get()方法
		//那么$_key = '_name'，$_calue = '联想'
		//即$this -> _name = '联想'
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