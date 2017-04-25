<?php
	
	date_default_timezone_set('America/New_York');
	
	
	//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
	
	$username = 'root';
	$password = '';
	$database = 'ssw7';
	
	
	try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=localhost;dbname=ssw7", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>