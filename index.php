<?php

	require_once 'database.php';
	
	$query = 'SELECT * FROM categories ORDER BY categoryID';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
?>
    
    
<!DOCTYPE html>
<html>
<head>

<link href="css/style.css" rel="stylesheet">
<script src="js/prefixfree.min.js"></script>
</head>
<body>

	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Site<span>Random</span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" value="Login">
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>


</body>
</html>


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