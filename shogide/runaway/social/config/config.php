<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "", "runaway-social"); //Connection variable

// $con = mysqli_connect("db721109953.db.1and1.com", "dbo721109953", "Runaph0enix3#", "db721109953"); //Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
