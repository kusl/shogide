<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "", "okee-social"); //Connection variable

//$con = mysqli_connect("db721108910.db.1and1.com", "dbo721108910", "Okeeph0enix2#", "db721108910"); //Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
