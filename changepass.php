<?php

$host="sql2.njit.edu"; // Host name 
$username="ssw7"; // Mysql username 
$password="SUbO2ykc4"; // Mysql password 
$db_name="ssw7"; // Database name 
$tbl_name="tasks"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

 $db = new PDO("mysql:host=sql2.njit.edu;dbname=ssw7", $username, $password);
 
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$checkUserID = mysql_query("SELECT * from user WHERE email = '$email'");
$checkUserpass = mysql_query("SELECT * from user WHERE password = '$password1'");

	if (!$checkUserID) {
	    die('Query failed to execute for some reason');
	}

	if((mysql_num_rows($checkUserID)>=1) && ($password1 == $password2)){
		$sql = "UPDATE user SET password = '$password1' WHERE email = '$email'";
		$statement = $db->prepare($sql);
		$statement->execute();
		$statement->closeCursor();	
		include 'index.php';
	  
	} else if ($email == '') {
	  $message = "Please enter your email\\nTry again.";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  include 'newpass.php';
	}
	else if ((mysql_num_rows($checkUserID) >= 1) && ($password1 != $password2)) {
	  $message = "Passwords do not match.\\nTry again.";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  include 'newpass.php';
	 }

?>
