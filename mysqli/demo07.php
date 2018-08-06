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

	//我要看查看的结果有多少个字段
	echo $result->field_count.'<br />';



	//获取当前指针指向列（字段）的名字，长度，所属表，字符集。。。。。等
	//$name = $result->fetch_field();
	//print_r($name);


	//通过循环获得个字段的名字或各字段的长度
	while($field = $result->fetch_field()) {
		echo $field->name.'----------'.$field->length.'<br />';
	}


	$result->free();
	$mysqli->close();

?>  