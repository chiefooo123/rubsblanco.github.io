<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hern_login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
