<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// $connection = mysql_connect("localhost", "root", "");
// // Selecting Database
// $db = mysql_select_db("company", $connection);
$connection = mysqli_connect('localhost', '', '');
if(!$connection){
	die("Database Connection Failed" .mysql_error());
}
$select_db = mysqli_select_db($connection,'login');
if(!$select_db){
	die("Database Connection Failed" .mysql_error());
}

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select username from login where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
