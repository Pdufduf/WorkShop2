<!DOCTYPE html>
<html>
<head>
<title>Intervenant</title>
<link rel="#" href="#">
<link BDD ###>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/Side_Bar_Navigation.css">
<link href="css/calendar.css" type="text/css" rel="stylesheet" />
<?php
  include 'pdo.php';
?>
</head>
<body>
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">

    <div id="mySidenav" class="sidenav">
        <h1>MENU</h1>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <p><a href="#">Accueil</a></p>
        <p><a href="#">Demandes</a></p>
        <p><a href="#">Groupes</a></p>

        <footer>
          <p><a href="../WorkShop2/index.php">Déconnexion</a></p>
        </footer>
    </div>

      <!-- Use any element to open the sidenav -->
      <!--<span onclick="openNav()">open</span>-->

      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main" class="custom_main">
        <header>
          <h1>BIENVENUE</h1>
        </header>
        <?php
        include 'calendar.php';
         
        $calendar = new Calendar();
         
        echo $calendar->show();
        ?>
      </div>
    </div>



  

  <div id="dropDownSelect1"></div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script src="js/main.js"></script>

</body>
</html>