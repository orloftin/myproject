<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('conn.inc.php');
include('function.php');
$year = "2017";
$cate_value = array("name","company_1","phone","email");
$cate_name = array("ชื่อ-นามสกุล / Firstname-Lastname", "ชื่อบริษัท / Company Name","โทรศัพท์ / Tel","อีเมลล์ / Email Address");


$page= getDateSet('page');
$Fname = "search";
$c = getDateSet('c');
$d = getDateSet('d');
$id = getDateSet('id');
$pi = getDateSet('pi');
$com_name = str_replace("a1515a","&",getDateSet('com'));

?>

<!DOCTYPE html>
<html lang="th">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXHIBITOR System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/page.css"/>
    <script type="text/javascript" src="vendor/js/canvasjs.min.js"></script>
    <script type="text/javascript" src="vendor/js/jquery.canvasjs.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">EXIBITOR Food & Fair</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li><a href="logout.php" style="color:#FAF0E6"> Logout </a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4"> Main Manu </h1>
          <div class="list-group">
            <a href="./?page" class="list-group-item"> Home </a>
            <a href="./?page=data" class="list-group-item"> ข้อมูลทั้งหมด </a>
            <a href="./?page=insert" class="list-group-item"> เพิ่มข้อมูล Exhibitor </a>
            <a href="./?page=report" class="list-group-item">Report Data</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->
<?
if($page==""){
	include('search.php');
}elseif($page=="data"){	
	include('data.php');
}elseif($page=="edit"){	
	include('edit.php');
}elseif($page=="delete"){
	include('delete.php');
}elseif($page=="insert"){
	include('insert.php');
}elseif($page=="add"){
	include('add.php');
}elseif($page=="report"){
	include('report.php');
$new_url = str_replace("&","a1515a",$com_name);
?>











      </div>
    </div>
    <!-- /.container -->



<?	
}

?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
  </body>

</html>
