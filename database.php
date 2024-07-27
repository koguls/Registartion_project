<?php  

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ogin_register";
$conn = mysql_connect($hostname, $dbUser, $dbPassword, $dbName);
if (!$conn) {
   die("something went wrong")
}
?>