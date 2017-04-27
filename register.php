

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
    
  <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="js/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="light-blue lighten-2">

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" name="form1" method="POST" action="process.php">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Sign Up</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="First Name" id = "fname" name="fname" type="text" value="">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="Last Name" name="lname" type="text" value="">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="Email" id="email" name="email" type="text" value="">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="Password" id="password" name="password"  type="password" value="">            
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="Phone Number" id="phone" name="phone" type="text" value="">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder ="Birthday (yyyy-mm-dd)" name="birthday" id="birthday">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">            
            <input placeholder="Gender" id="gender" name="gender" type="text" value="">
          </div>
        </div>

        <input class="btn waves-effect waves-light col s12" type="submit" value="Submit">

        <br></br>
         
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="index.php">Sign In</a></p>
          </div>         
        </div> 

      </form>

    </div>
  </div>



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
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

 


</body>

</html>