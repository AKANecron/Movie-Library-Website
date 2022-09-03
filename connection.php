<?php

$dbhost = "localhost";
$dbuser = "kakadidh_kakadidh";
$dbpass = "its+@+secret";
$dbname = "kakadidh_mydb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
