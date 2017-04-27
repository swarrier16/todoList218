<?php

$host="sql2.njit.edu"; // Host name
$username="ssw7"; // Mysql username
$password="SUbO2ykc4"; // Mysql password
$db_name="ssw7"; // Database name
$tbl_name="user"; // Table name



// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];

// Insert data into mysql 
 $sql="INSERT INTO $tbl_name(fname, lname, email, password, phone, birthday, gender)VALUES('$fname', '$lname', '$email', '$password', '$phone', '$birthday', '$gender')";
 $result=mysql_query($sql);

?> 

<?php 
// close connection 
mysql_close();
?>
