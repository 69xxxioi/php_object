<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	//$sql = 'SELECT * FROM user1 LIMIT 0,4';
	$sql = 'SELECT * FROM user1 LIMIT 0,4';

	$result = $mysqli->query($sql);

	//一次性取得多个字段，返回一个二维数组，第一维是数组索引值，每一个索引值对应
	//的是每一个字段的所有信息，第二位是个字段的信息，如name，type，length。。。
	$fields = $result->fetch_fields();
	//print_r($fields);
	echo $fields[0]->name;

	//遍历美个字段的某一信息，如打印出每个字段的name
	foreach($fields as $key => $value) {
		echo $value->name.'<br />';
	}






	$result->free();
	$mysqli->close();

?>  