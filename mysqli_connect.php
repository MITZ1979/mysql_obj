<?php
/**
 *�������ݿ�
 */
header("Content-type:text/html; charset=utf-8");//����ҳ��HTMLĬ���ַ���

// �������Ӳ���
$host = 'localhost';
$dbName =  "mysqli_obj";
$userName = "root";
$password = "root";

//����1���ȴ���mysqli �����ڵ���connect()�������
//$mysqli = new mysqli();
//$mysqli->connect($host,$userName,$password);
//$mysqli->select_db($dbName);//ѡ��Ĭ�����ݿ�
//echo '<pre>';
//print_r($mysqli);

//����2���Ƽ�
$mysqli = new mysqli($host,$userName,$password,$dbName);

if ($mysqli->connect_errno){
	die('<h2 style="color:red">���Ӵ���</h2>'.mysqli->connect_error);
} else {
	echo "<h2>���ӳɹ�</h2>";
}
$mysqli->set_charset('utf8');