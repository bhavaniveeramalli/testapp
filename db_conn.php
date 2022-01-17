<?php  

$sname = "dbserver";
$uname = "root";
$password = "root";

$db_name = "testdb";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
