<?php
	/*
	class Computer {
		public $_name;
		public $_model;

		public function Computer() {
			echo "我是构造方法！<br/>";
		}
	}

	$computer1 = new Computer();*/



	class Demo {

		//构造方法
		public function __construct() {
			echo "我是构造方法！<br />";
		}

		/*//析构方法
		public function __destruct() {
			echo "我是析构方法！<br />";
		}*/



		//普通方法
		public function _fun() {
			echo "我是普通方法！";
		}


		//析构方法
		public function __destruct() {
			echo "hello world! __destruct";
		}

	}

	new Demo();


?>