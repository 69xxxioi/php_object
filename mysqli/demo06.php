<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	$sql = 'SELECT * FROM user1 LIMIT 0,4';

	$result = $mysqli->query($sql);

	//我要看我选择了多少行
	echo $result->num_rows;

	//影响多少行
	echo $mysqli->affected_rows;


	$result->free();
	$mysqli->close();

?>  