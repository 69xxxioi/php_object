<?php 

	/*class Computer {

		const NAME = 'DELL';
	}

	//常量的输出方法  类::常量
	
	echo Computer::NAME.'<br />';*/




/*
	class Computer {

		public $con = 0;
		function add() {

			$this -> con ++;
	
		}
	}

	$computer1 = new Computer();
	$computer1 -> add();
	$computer1 -> add();
	echo $computer1 -> con;

	$computer2 = new Computer();
	$computer2 -> add();
	$computer2 -> add();
	echo $computer2 -> con;*/



/*	class Computer {

		public static $con = 0;
		function add() {

			self::$con ++;
	
		}
	}

	$computer1 = new Computer();
	$computer1 -> add();
	$computer1 -> add();
	$computer1 -> add();
	echo Computer::$con;

	$computer2 = new Computer();
	$computer2 -> add();
	$computer2 -> add();
	$computer2 -> add();
	echo Computer::$con;*/


	class Computer {
		
		public static $_con = 0;
		public static function _add() {

			echo self::$_con++;
		}
	}

	Computer::_add();
	Computer::_add();
	Computer::_add();
	Computer::_add();
	Computer::_add();



?>