<?php
$connection = mysqli_connect('localhost', '','');
if(!$connection){
	die("Database Connection Failed" .mysql_error());
}
$select_db = mysqli_select_db($connection,'login');
if(!$select_db){
	die("Database Connection Failed" .mysql_error());
}
?>
