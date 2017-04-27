<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="ssw7"; // Database name 
$tbl_name="user"; // Table name 


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$email = $_POST['email'];
$password = $_POST['password'];
$checkUserID = mysql_query("SELECT * from user WHERE email = '$email'");
$checkUserpass = mysql_query("SELECT * from user WHERE password = '$password'");

	if (!$checkUserID) {
	    die('Query failed to execute for some reason');
	}

	if(mysql_num_rows($checkUserID)>=1) {
    	include 'tasks.php';
   }
?>