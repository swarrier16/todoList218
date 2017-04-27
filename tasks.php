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
<?php 
 // include 'addtask.php';
?>
  <center>
  <nav>
  
    <div class="nav-wrapper light-blue lighten-2 ">
    <div class="container">
      <a href="#" class="brand-logo center">My ToDo List</a>
      <a href="index.php"><i style="text-align: right" class="material-icons">exit_to_app</i> </a>     
    </div>
    </div>
  </nav>

  <h4>Welcome, </h4> 
  <?php 
  if (isset($_POST["email"])){
    echo  $_POST["email"];
  }
  else {
    echo "(you didn't provide a name)";
  }


?>
<br>


  <br></br>
  <div class="container">
  <a href="newtask.php" class="waves-effect waves-light btn pink lighten-1"><i class="material-icons left">add_circle_outline</i>New Task</a>
  <h4 style="text-align: left"> Incomplete:</h4>
 
        
                 
              </span>
            <!-- </div> -->
            
            <?php
              $query = 'SELECT * FROM tasks ORDER BY id';
              $statement = $db->prepare($query);
              $statement->execute();
              $categories = $statement->fetchAll();
              $statement->closeCursor();


       foreach($categories as $id) : ?>

       <p> 
              <?php 
                  require_once 'addtask.php';
                  echo  $_POST["task"];?>
              <br>

                  Started: <?php
                  echo  $_POST["startdate"];
              ?> 
                <br>
                  Due: <?php
                  echo  $_POST["due"];
               
              ?> 
              <br>

                  Message: <?php
                  echo  $_POST["message"];
               
              ?> 
              <br>
              <a class="waves-effect waves-light btn  blue lighten-4">Edit</a>
              <input class="btn waves-effect waves-light col s12 green darken-2" name="complete" type="submit" value="Complete">
              

              <a class="waves-effect waves-light btn red darken-1">Delete</a>

              </p>
            <br><br>
   
        <!-- <a href="?category_id= <?php  
                  echo $category['task']; ?>">
            <!-- <?php echo $category['due']; ?> -->
        <!-- </a> -->
   
    <?php endforeach; ?>

              <!-- //echo $categories; -->
            
              <!-- <p> 

                  Started: <?php
                  echo  $_POST["startdate"];
              ?> 
                <br>
                  Due: <?php
                  echo  $_POST["due"];
               
              ?> 
              <br>

                  Message: <?php
                  echo  $_POST["message"];
               
              ?> 
              <br>
              <a class="waves-effect waves-light btn  blue lighten-4">Edit</a>
              <input class="btn waves-effect waves-light col s12 green darken-2" name="complete" type="submit" value="Complete">
              

              <a class="waves-effect waves-light btn red darken-1">Delete</a>

              </p> -->
            <br><br>
      <h4 style="text-align: left"> Complete:</h4>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</body>

</html>