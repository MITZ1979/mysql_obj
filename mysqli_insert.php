<?php
//�������ݿ�
require 'mysqli_connect.php';

//׼��sql���
$createTime=time();
$sql = "INSERT student (name,email,course,grade,create_time) 
VALUES ('С��','xiaoyu@qq.com','mysql',70,{$createTime})";
//ִ����������
if ($mysqli->query($sql)){
	echo '�ɹ������'.$mysqli->affected_rows .'��������¼������������ID��:'.$mysqli->insert_id ;
} else{
	echo '���ʧ��'.$mysqli->errno.':'.$mysqli->error;
}

//�ر�����
$mysqli->close();

