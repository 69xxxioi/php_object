<?php 

	$mysqli = new mysqli('localhost','root','12345678','test');

	if(mysqli_connect_errno()) {
		echo '链接出错，错误信息为：'.mysqli_connect_error();
		exit();
	}

	$mysqli->set_charset('utf8');

	//关闭自动提交，改为手动提交
	$mysqli->autocommit(false);

	$sql .= "UPDATE user1 SET age=age-1 WHERE id=6;";
	$sql .= "UPDATE user1 SET age=age+1 WHERE id=5;";

	//执行多条sql语句
	//只要两条SQL语句都成功了，就手动提交给数据库
	//否则就回滚，撤销之前的有效操作
	
	if($mysqli->multi_query($sql)) {
		//后面要通过这个参数来判断是否要回滚，如果为true就得回滚，反之不回滚
		$success = $mysqli->affected_rows == 1 ? true : false;

		//下移指针
		$mysqli->next_result();
		$success = $mysqli->affected_rows == 1 ? true : false;

		//如果两条都执行成功的话，就提交事务，只要有失败就回滚
		if($success) {
			//执行手工提交
			$mysqli->commit();
			echo '事务成功提交！';
		} else {
			//回滚
			$mysqli->rollback();
			echo '事务回滚！';
		}
	} else {
		echo '第一条SQL语句有误！';
	}

	//再次开启自动提交
	$mysqli->autocommit(true);



	//$result->free();
	$mysqli->close();

?>  