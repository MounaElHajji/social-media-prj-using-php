<?php

$dbservername= "localhost";
$dbusername= "root";
$dbpassword="";
$dbname="twitter";

$conn=mysqli_connect($dbservername,$dbusername, $dbpassword, $dbname);


if(!$conn) {
	die("connection failed:" .mysqli_connect_error());
}