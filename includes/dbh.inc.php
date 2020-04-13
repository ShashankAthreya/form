<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "formforfun";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn) {
	die("Connection failed: ".mysql_error());
}