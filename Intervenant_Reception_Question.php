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
        <h1 class="menu">MENU</h1>
            <p><a href="Intervenant.php">Accueil</a></p>
            <p><a href="Intervenant_Reception_Question.php">Demandes</a></p>
            <p><a href="Intervenant_Groupes.php">Groupes</a></p>

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
            <div class="">
            <?php
            //Connexion à la base de données
            //(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
            $pdo = new PDO(
                'mysql:host=localhost;dbname=helpcenter', 'root', '');

            //Sélection nom, prenom connexion
            $listeDemande = $pdo->prepare('SELECT * FROM demande');
            $listeDemande->execute();
            ?>
                <div style="overflow-x:auto;">
                    <table style="width:100%; text-overflow: ellipsis; word-wrap: break-word; ">
                        <tr>
                            <th> Sujet du problème </th>
                            <th style="padding-left: 10px;"> Description </th>
                            <th style="padding-left: 10px;"> Nom du groupe </th>
                        </tr>
                        <?php while ($resultDemande = $listeDemande->fetch()) { ?>
                        <tr>
                            <td style="padding-top: 20px;"> <?php echo $resultDemande['type']; ?> </td>
                            <td style="padding-left: 10px; padding-top: 20px; width:300px; text-overflow: ellipsis; word-wrap: break-word;"> <?php echo $resultDemande['texte']; ?> </td>
                            <td style="padding-left: 10px;padding-top: 20px; ">
                                <?php
                                    $nomGroupe = $pdo->prepare('SELECT nom FROM groupe g JOIN demande d ON g.id=d.groupeId WHERE g.id =' . "$resultDemande[groupeId]");
                                    $nomGroupe->execute();
                                    $nomDuGroupe = $nomGroupe->fetch();
                                    echo $nomDuGroupe[0];
                                } ?>
                            </td>
                        </tr>
                    </table>
                </div>
        </div>
	</div>
</body>
</html>