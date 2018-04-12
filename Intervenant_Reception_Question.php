<!DOCTYPE html>
<html>
<head>
<title>Intervenant Reception de Question</title>
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

<!------ temp ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ temp ---------->

<?php
  include 'pdo.php';
?>
</head>
<body>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
	
    <div id="mySidenav" class="sidenav">
        <h1>MENU</h1>
        <p><a href="#">Accueil</a></p>
        <p><a href="#">Demandes</a></p>
        <p><a href="#">Groupes</a></p>

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
                Bienvenue sur la page Intervenant ! <br/>
                Vous pouvez ici rejoindre un groupe de projet qui a été créée au préalable <br/> par votre Responsable
                Etudiant. Une fois un groupe rejoint, vous pourrez <br/> ensuite contacter des intervenants afin de leur
                poser des questions sur votre projet. <br/>
                Gérez bien vos jetons !
            </p>
            <table class="table table-inbox table-hover">
                <tbody>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message  dont-show">Groupe 1</td>
                    <td class="view-message ">Reponse pour le groupe 1</td>
                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message  text-right">9:27 AM</td>
                </tr>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Groupe 2</td>
                    <td class="view-message">Reponse pour le groupe 2</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 15</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Groupe 4</td>
                    <td class="view-message">Reponse pour le groupe 4 </td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 15</td>
                </tr>
                </tbody>
            </table>
        </div>
	</div>
</body>
</html>