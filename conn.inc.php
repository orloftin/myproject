<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	$host = "localhost";
	$user = "root";
	$pass = "password";
	$DB = "project";

    $con = mysqli_connect($host,$user,$pass, $DB) or die(sqlerror());
    mysqli_set_charset($con,"utf8");
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    
?>