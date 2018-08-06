<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	$sql = 'SELECT * FROM user1';

	$result = $mysqli->query($sql);

	//使用oop的方式object
	$oop = $result->fetch_object();	
	echo $oop->password.'<br/>';

	//还可以这样打印，直接通过对象的属性打印，而属性名就是表字段名
	echo $result->fetch_object()->birthday.'<br/>';


	//遍历
	while($oop = $result->fetch_object()) {
		echo $oop->name.'<br/>';
	}


	$result->free();
	$mysqli->close();

?>