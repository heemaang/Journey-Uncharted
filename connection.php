<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "ad2";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
