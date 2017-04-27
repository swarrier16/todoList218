<?php
	
	date_default_timezone_set('America/New_York');
	
	
	//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
	
	
	$username="ssw7"; // Mysql username
	$password="SUbO2ykc4"; // Mysql password
	$database="ssw7"; // Database name
	

	
	
	try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=sql2.njit.edu;dbname=ssw7", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>



