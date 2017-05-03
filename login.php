<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="ssw7"; // Database name 
$tbl_name="tasks"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$email = $_POST['email'];
$password = $_POST['password'];
$checkUserID = mysql_query("SELECT * from user WHERE email = '$email'");
$checkUserpass = mysql_query("SELECT * from user WHERE password = '$password'");

	if (!$checkUserID) {
	    die('Query failed to execute for some reason');
	}

	if((mysql_num_rows($checkUserID)>=1) && (mysql_num_rows($checkUserpass)>=1)) {

	  header("Location: tasks.php");
	} else {
	  $message = "Username and/or Password incorrect.\\nTry again.";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  include 'index.php';
	}
	// if(mysql_num_rows($checkUserID)>=1) {
 //    	header("Location: tasks.php");
 //   }
 //   else{
 //   	header("Location: index.php");
 //   }



?>