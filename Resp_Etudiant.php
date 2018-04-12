<!DOCTYPE html>
<html>
<head>
<title>Responsable étudiant</title>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="css/Side_Bar_Navigation.css">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/Side_Bar_Navigation.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">
</head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="sidenav">
        <h1 class="menu">MENU</h1>
	<p><a href="Resp_Etudiant.php">Accueil</a></p>
	<p><a href="gestion_intervenant.php">Gestion intervenant</a></p>
	<p><a href="gestion_des_jetons.php">Gestion des jetons</a></p>

	<footer>
        <p><a href="../WorkShop2/index.php">Déconnexion</a></p>
    </footer>
</div>
    <div id="main">
        <div class="profil">
            <?php
            session_start ();
            echo "Connecté en tant que " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
            ?>
        </div>
        <p class="lead" style="margin-left: 200px;">
            Bienvenue sur la page du Responsable Etudiant ! <br/>
            Vous pouvez ici gérer les intervenants des projets, gérer les jetons attribués <br/>
            aux différents groupes de projets d'élèves et enfin gérer les groupes <br/>
            d'élèves afin d'en rajouter et d'en supprimer. <br/>
        </p>
    </div>
</div>
</div>
</body>

</html>
