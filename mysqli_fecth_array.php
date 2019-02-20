<?php

require 'mysqli_connect.php';
//准备sql语句
$sql = "select id,name,sourse,grade from student where grade>80";

if ($mysqli->query($sql)){
	echo "成功的更新了".$mysqli->affected_rows ."记录";
} else{
	echo "更新失败".$mysqli->errno.":"$mysqli->error;	
}

$mysqli->close();