<?php

	class Computer {

		private $_name = '联想';


		//该方法提供对类外进行取值操作的接口
		public function getName() {

			return $this -> _name;
		}

		//该方法提供对类外的赋值操作的接口
		public function setName($_name) {

			$this -> _name = $_name;
		}
	}


	$computer1 = new Computer();

	//对类内的私有属性取值
    echo $computer1 -> getName();


	//对类内的私有属性进行复制操作
	echo $computer1 -> setName('dell');

	echo $computer1 -> getName();




?>