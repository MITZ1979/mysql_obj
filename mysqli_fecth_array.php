<?php

require 'mysqli_connect.php';
//׼��sql���
$sql = "select id,name,sourse,grade from student where grade>80";

if ($mysqli->query($sql)){
	echo "�ɹ��ĸ�����".$mysqli->affected_rows ."��¼";
} else{
	echo "����ʧ��".$mysqli->errno.":"$mysqli->error;	
}

$mysqli->close();