<?php

	//这个用户抽象类用来规范子类的字段和方法
	abstract class User {

		//成员字段
		protected $_username;
		protected $_password;
		protected $_notpassword;
		protected $_email;

		//一个方法，登录和注册
		//如果你点了登录，就执行这个登录方法
		//如果你点了注册，就执行这个注册方法
		
		abstract function _query();
		abstract function _check();
		
	}



?>