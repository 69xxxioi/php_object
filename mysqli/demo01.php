<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');
	if(mysqli_connect_errno()) {
		echo '数据库连接出错，错误的信息是：'.mysqli_connect_error();
		exit();
	}

	$sql='select * from user1';
	$result = $mysqli->query($sql);
	//var_dump($result);

	//通过结果集，取得第一行数据
	print_r($result->fetch_row());
	//结果集没打印一次，指针下移一行，如果想打印第二行，就再运行一次
	print_r($result->fetch_row());


	//释放查询内存（销毁）
	$result->free();
	

	//关闭链接
	$mysqli->close();




?>