<?php



$host="sql2.njit.edu"; // Host name
$username="ssw7"; // Mysql username
$password="SUbO2ykc4"; // Mysql password
$db_name="ssw7"; // Database name
$tbl_name="user"; // Table name


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// $complete = $_GET['complete'];

 

// if(isset($_POST['continue'])) {
// 	"UPDATE tasks SET complete = 1 WHERE complete = 0";    
//    }

$sql = 'SELECT * FROM `tasks` WHERE complete = 0 ORDER BY due ASC';

if(isset($_POST['complete'])) {
   $sql = "UPDATE tasks SET complete = 1 WHERE complete = 0";
   header("Location: tasks.php");
  }


?>
