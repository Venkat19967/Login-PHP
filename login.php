<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// $connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$connection = mysqli_connect('localhost', '', '');
if(!$connection){
	die("Database Connection Failed" .mysql_error());
}
$select_db = mysqli_select_db($connection,'login');
if(!$select_db){
	die("Database Connection Failed" .mysql_error());
}
// $username = stripslashes($username);
// $password = stripslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from login where password='$password' AND email='$email'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: Dashboard/dashboard.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>
