<?php
//连接数据库
require 'mysqli_connect.php';

//准备sql语句
$updateTime = time();
$sql = "UPDATE student SET course = 'php', grade=90, update_time={$updateTime} WHERE id= 1 ";

if ($mysqli->query($sql)){
	echo "成功的更新了".$mysqli->affected_rows ."记录";
} else{
	echo "更新失败".$mysqli->errno.":"$mysqli->error;	
}

$mysqli->close();