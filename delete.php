<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

    include_once 'conn.inc.php';
    
	$con = mysqli_connect($host,$user,$pass,$DB);

	$id = $_GET["id"];
	$sql = "DELETE FROM exhibitor
			WHERE id = '".$id."' ";

	$query = mysqli_query($con,$sql);

	if(mysqli_affected_rows($con)) {
		echo "<script>";
		echo " alert ('ลบข้อมูลเรียบร้อย!');";
		echo "window.location.href='./?page';";
		echo "</script>";

	}

	mysqli_close($con);
?>