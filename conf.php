<!DOCTYPE html>
<html>
<body>

<?php

$server="localhost";
$port=3308;
$user="root";
$password="";
$db="mysqltest";
$con=mysqli_connect($server, $user, $password, $db, $port) or die("connection failed");
echo("connection success");
?>
</body>
</html>