<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	//$sql = 'SELECT * FROM user1 LIMIT 0,4';
	$sql = 'SELECT * FROM user1';

	$result = $mysqli->query($sql);

	//移动数据指针,将指记录（数据行）针指向记录的第五行
	$result->data_seek(4);
	$row = $result->fetch_row();
	echo $row[1].'<br />';


	//移动字段指针，将字段（列）指针指向字段的第四列
	$result->field_seek(3);
	$field = $result->fetch_field();
	echo $field->name;





	$result->free();
	$mysqli->close();

?>  