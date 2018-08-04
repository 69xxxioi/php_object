<?php
try {
    $con = new PDO('mysql:host=mysql;dbname=test', 'root', '123456');
    $con->query('SET NAMES UTF8');
    $res =  $con->query('select * from test');
    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        echo "id:{$row['id']} &nbsp; name:{$row['name']} &nbsp; sex:{$row['sex']} &nbsp; birthday:{$row['birthday']} <br/>";
    }
} catch (PDOException $e) {
     echo '错误原因：'.$e->getMessage();
}