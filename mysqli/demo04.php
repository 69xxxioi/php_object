<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	$sql = 'SELECT * FROM user1';

	$result = $mysqli->query($sql);

	//使用索引+关联数组取值
	//print_r($result->fetch_array());

	//$row = $result->fetch_array();
	//echo $row[1].'<br />';
	//echo $row['name'];


	//遍历数组
	while($row = $result->fetch_array()) {
		echo $row['name'].'----------'.$row['1'].'<br />';
	}


	$result->free();
	$mysqli->close();

?>