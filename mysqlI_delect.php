<?php
require 'mysqli_connect.php';

$sql = "delect from student where id = 11";
if ($mysqli->query($sql)){
	echo "�ɹ�ɾ����".$mysqli->affected_rows."����¼";
} else{
	echo "ɾ��ʧ��".$mysqli->errno.":".$mysqli->error;
}

$mysqli->close();