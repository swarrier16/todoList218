<?php

$host="sql2.njit.edu"; // Host name
$username="ssw7"; // Mysql username
$password="SUbO2ykc4"; // Mysql password
$db_name="ssw7"; // Database name
$tbl_name="user"; // Table name



// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



//session_start(); 
$task = $_POST['task'];
$message = $_POST['message'];
$startdate = $_POST['startdate'];
$due = $_POST['due'];

// Insert data into mysql 
$sql="INSERT INTO tasks(task, message, startdate, due)VALUES('$task', '$message', '$startdate', '$due')";
$result=mysql_query($sql);

require_once 'tasks.php';
//session_unset();
//session_destroy(); 



  
              
            


?> 

<?php 
// close connection 
mysql_close();
?>
