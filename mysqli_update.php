<?php
//�������ݿ�
require 'mysqli_connect.php';

//׼��sql���
$updateTime = time();
$sql = "UPDATE student SET course = 'php', grade=90, update_time={$updateTime} WHERE id= 1 ";

if ($mysqli->query($sql)){
	echo "�ɹ��ĸ�����".$mysqli->affected_rows ."��¼";
} else{
	echo "����ʧ��".$mysqli->errno.":"$mysqli->error;	
}

$mysqli->close();