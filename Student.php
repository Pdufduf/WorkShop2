<!DOCTYPE html>
<html>
<head>
<title>Student</title>
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
</head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div id="mySidenav" class="sidenav">
        <h1 class="menu">MENU</h1>
        <p><a href="Student.php">Accueil</a></p>
        <p><a href="Student_Question_Form.php">Formulaires de Questions</a></p>
        <p><a href="Student_Groups.php">Groupes</a></p>
        <p><a href="projet.php">Projet</a></p>

        <footer>
          <p><a href="../WorkShop2/index.php">Déconnexion</a></p>
        </footer>
    </div>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
    <div class="profil">
        <?php
        session_start ();
        echo "Connecté en tant que " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
        ?>
    </div>
    <p class="lead" style="margin-left: 200px;">
        Bienvenue sur la page Etudiante ! <br/>
        Vous pouvez ici rejoindre un groupe de projet qui a été créée au préalable <br/> par votre Responsable
        Etudiant. Une fois un groupe rejoint, vous pourrez <br/> ensuite contacter des intervenants afin de leur
        poser des questions sur votre projet. <br/>
        Gérez bien vos jetons !
    </p>
</div>

</body>
</html>