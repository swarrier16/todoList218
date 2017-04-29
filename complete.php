<?php

require_once 'database.php';


$task_id = $_POST['task_id'];
$sql = 'SELECT complete FROM `tasks` WHERE complete = 0 ORDER BY due ASC';

if(isset($_POST['complete'])) 
{
   $sql = "UPDATE tasks SET complete = 1 WHERE id = '$task_id' ";
   $statement = $db->prepare($sql);
	$statement->execute();
	$statement->closeCursor();
   include 'tasks.php';
  }


?>
