<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');
	
	//创建三条修改表数据的SQL语句
	//$sql .= "INSERT INTO user1 VALUES(null,'陈思念',md5('csl'),20,'1998-10-12');";
	//$sql .= "UPDATE user1 SET name='zbz' WHERE id=2;";
	//$sql .= "INSERT INTO user1 VALUES(null,'张柏芝',md5('zbz'),27,'1991-1-10');";

	//创建三条查询语句
	$sql .= 'SELECT * FROM cms_comment;';
	$sql .= 'SELECT * FROM cms_adver;';
	$sql .= 'SELECT * FROM user1;';



	//执行多条SQL语句
	if(!$mysqli->multi_query($sql)) {
		//只能判断第一条语句是否有误，如果后面的语句有错，则判断不出
		//$mysqli->multi_query($sql)执行成功与后面两条执行成功都返回1，第一条语句有误，返回0
		echo '第一条语句有误！';
		exit();
	}
	//获取当前的结果集
	$result = $mysqli->store_result();
	print_r($result->fetch_row());

	echo '<br />';

	//将结果集的指针移动到下一条sql语句执行的结果集
	$mysqli->next_result();
	$result = $mysqli->store_result();
	if(!$result) {
		echo '第二条语句有误！';
		exit();
	}
	print_r($result->fetch_row());

	echo '<br />';

	$mysqli->next_result();
	$result = $mysqli->store_result();
	if(!$result) {
		echo '第三条语句有误！';
		exit();
	}
	print_r($result->fetch_row());


	




	//$result->free();
	$mysqli->close();

?>  