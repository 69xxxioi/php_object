<?php

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	//设置编码
	$mysqli->set_charset('utf8');
	//创建一句SQL，获取去表的数据
	$sql = 'SELECT * FROM user1';

	//创建一个结果集
	$result = $mysqli->query($sql);

	//使用索引数组取值
	//print_r($result->fetch_row());
	//$row = $result->fetch_row();
	//echo $row[2];
	//通过循环打印某列的所有值
	while(!!$row = $result->fetch_row()) {
		echo $row[4].'<br />';
	}
	

	$result->close();
	$mysqli->close();


?>