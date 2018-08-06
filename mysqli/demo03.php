<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	$sql = 'SELECT * FROM user1';

	$result = $mysqli->query($sql);

	//使用关联数组取值
	//print_r($result->fetch_assoc());
	while($assoc = $result->fetch_assoc()) {
		echo $assoc['birthday'].'<br />';
	}



	$result->free();
	$mysqli->close();

?>