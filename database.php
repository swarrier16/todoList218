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



<!--div class="maindiv">
	<form id="score" method="post" action="process.php">
		<div class="form_div">
		<div class="title">
		</div>
		<form action="insert.php" method="post">

		<h2>Form</h2>
		<label>First Name:</label>
		<input class="input" name="fname" type="text" value="">
		<label>Last Name:</label>
		<input class="input" name="lname" type="text" value="">
		<label>Email:</label>
		<input class="input" name="email" type="text" value="">
		<label>Phone Number:</label>
		<input class="input" name="phone" type="text" value="">
		<label>Birthday:</label>
		<textarea class="input" name="birthday" type="text" value=""></textarea><br>
		<label>Gender:</label>
		<input class="input" name="" type="text" value="">
		<input class="submit" name="submit" type="submit" value="Insert">
		</form -->