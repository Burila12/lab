<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "labuser";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}         ?>
