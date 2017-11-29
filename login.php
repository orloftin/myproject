<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/page.css"/>
  <title>EXHIBITOR</title>
  </head> 
  
<body >
<div class="container">
    <div class="row">
    <div class="col-lg-3"></div>
        <div class=" col-lg-6">

 <?php
	require('conn.inc.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `user` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			echo '<script>window.location = "index.php"</script>';
            }else{
				echo "<p>&nbsp;</p>";
				echo "<p>&nbsp;</p>";
				echo "<p>&nbsp;</p>";
				echo "<p>&nbsp;</p>";
				echo "<div align='center' class='form'><h2>Username/password is incorrect.</h2><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div><p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h3 align="center">Log In To System</h3>
</div><br/>
 
        <form action="" method="post" name="login" class="form-signin">

              <input class="form-control" type="text" name="username" placeholder="Username" required /> <br/>
              
              
              <input class="form-control" type="password" name="password" placeholder="Password" required /><br/>
              
              <input name="submit" type="submit" value="SUBMIT" class="btn btn-primary btn-block "/>
 
        </form>

            <?php } ?> 
</div>
</div>
</div>

<div class="col-lg-3"></div>


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>