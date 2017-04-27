<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="ssw7"; // Database name 
$tbl_name="user"; // Table name 


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$task = $_POST['task'];
$message = $_POST['message'];
$startdate = $_POST['startdate'];
$due = $_POST['due'];


require_once 'tasks.php';
// Insert data into mysql 
$sql="INSERT INTO tasks(task, message, startdate, due)VALUES('$task', '$message', '$startdate', '$due')";
$result=mysql_query($sql);   

             
              
            


?> 

<?php 
// close connection 
mysql_close();
?>