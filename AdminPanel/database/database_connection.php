<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "highbrary";
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, $dbname);

if(!$con)
{
	die("Connection error".mysqli_connect_error());
}

?>