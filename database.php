<?php  

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = mysql_connect($hostname, $dbUser, $dbPassword, $dbName);
if (!$conn) {
   die("something went wrong")
}
?>