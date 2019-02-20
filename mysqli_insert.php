<?php
//链接数据库
require 'mysqli_connect.php';

//准备sql语句
$createTime=time();
$sql = "INSERT student (name,email,course,grade,create_time) 
VALUES ('小鱼','xiaoyu@qq.com','mysql',70,{$createTime})";
//执行新增操作
if ($mysqli->query($sql)){
	echo '成功添加了'.$mysqli->affected_rows .'条新增记录，新增的主键ID是:'.$mysqli->insert_id ;
} else{
	echo '添加失败'.$mysqli->errno.':'.$mysqli->error;
}

//关闭连接
$mysqli->close();

