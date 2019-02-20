<?php
/**
 *链接数据库
 */
header("Content-type:text/html; charset=utf-8");//设置页面HTML默认字符集

// 设置连接参数
$host = 'localhost';
$dbName =  "mysqli_obj";
$userName = "root";
$password = "root";

//方法1：先创建mysqli 对象，在调用connect()完成连接
//$mysqli = new mysqli();
//$mysqli->connect($host,$userName,$password);
//$mysqli->select_db($dbName);//选择默认数据库
//echo '<pre>';
//print_r($mysqli);

//方法2：推荐
$mysqli = new mysqli($host,$userName,$password,$dbName);

if ($mysqli->connect_errno){
	die('<h2 style="color:red">连接错误</h2>'.mysqli->connect_error);
} else {
	echo "<h2>连接成功</h2>";
}
$mysqli->set_charset('utf8');