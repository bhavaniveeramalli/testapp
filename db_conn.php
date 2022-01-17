<?php  

$sname = "0.0.0.0";
$uname = "root";
$password = "root";

$db_name = "testdb";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
