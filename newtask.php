<?php

	require_once 'database.php';
	
	$query = 'SELECT * FROM user';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
?>


<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!-- Custome CSS-->    
    
  <!-- <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection"> -->

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="js/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body>
  <center>
  <nav>
    <div class="nav-wrapper light-blue lighten-2 ">
      <a href="#" class="brand-logo center">My ToDo List</a>      
    </div>
  </nav>

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="POST" action="addtask.php">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Add Task</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="Task Name" id="task" type="text" name ="task" value ="">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">         
            <input placeholder="Task Description" id="message" name ="message" value="">            
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12"> 
                    
            <input placeholder="Start Date" id="startdate" name ="startdate" value="">
            
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">          
            <input placeholder="Deadline" id="deadline" name ="due" value="">
            
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input class="btn waves-effect waves-light col s12" type="submit" value="Submit">
          </div>
        </div>
          
</center>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</body>

</html>