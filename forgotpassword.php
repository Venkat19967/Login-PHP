<?php
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $sql = "SELECT * FROM `login` WHERE username = '$username'";
  $res = mysqli_query( $connection,$sql);
  $count = mysqli_num_rows($res);

  if($count == 1){
    echo "<script type='text/javascript'>alert('Send email to user with password');</script>";
  }else{
    echo "<script type='text/javascript'>alert('User name does not exist in database');</script>";
  }
}

$r = mysql_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password: ";

$message = "Please use this password to login " . $password;

if(mail($to, $subject, $message)){

 echo "<script type='text/javascript'>alert('Your Password has been sent to your email id');</script>";
}
else{

 echo "<script type='text/javascript'>alert('Failed to Recover your password, try again');</script>";
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forgot Password XD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>



<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">XD</span>
    <input type="text" name="username" class="form-control" placeholder="Username" required>
  </div>
  <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="index.html">Login</a>
      </form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
