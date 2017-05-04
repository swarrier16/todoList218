<?php

require_once 'database.php';

$task = $_POST['task'];
$message = $_POST['message'];

$due = $_POST['due'];

$task_id = $_POST['task_id'];



// Insert data into mysql 
if(isset($_POST['edit'])) 
{

$sql="UPDATE tasks SET task = '$task', message = '$message', due = '$due' WHERE  id = '$task_id' ";
$statement = $db->prepare($sql);
$statement->execute();
$statement->closeCursor();	

include 'tasks.php'; 
}
// $sql = 'SELECT complete FROM `tasks` WHERE complete = 0 ORDER BY due ASC';


//    $sql = "UPDATE tasks SET * WHERE id = '$task_id' ";
//    $statement = $db->prepare($sql);
// 	$statement->execute();
// 	$statement->closeCursor();
//    include 'tasks.php'; 


?>
