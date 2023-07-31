<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "phpcrud";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


echo "Connection done";
if (!$conn) {
	
}