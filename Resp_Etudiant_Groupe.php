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
	<p><a href="Resp_Etudiant_Groupe.php">Liste des groupes</a></p>

	<footer>
        <p><a href="../WorkShop2/index.php">Déconnexion</a></p>
    </footer>
</div>

<div id="Main" class="main">
    <div style="overflow-x:auto;">
        <div class="profil">
            <?php
            session_start ();

            //Connexion à la base de données
            //(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
            $pdo = new PDO(
                'mysql:host=localhost;dbname=helpcenter', 'root', '');

            //Sélection nom, prenom connexion
            $listeGroupe = $pdo->prepare('SELECT * FROM groupe');
            $listeGroupe->execute();

            echo "Connecté en tant que " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
            ?>
        </div>
        <div>
                <table style="width:100%; text-overflow: ellipsis; word-wrap: break-word; ">
                    <tr>
                        <th> Nom </th>
                        <th style="padding-left: 10px;"> Nombre d'étudiant </th>
                        <th style="padding-left: 10px;"> Jetons restants </th>
                    </tr>
                    <?php while ($resultGroupe = $listeGroupe->fetch()) { ?>
                    <tr>
                        <td style="padding-top: 20px;"> <?php echo $resultGroupe['nom']; ?> </td>
                        <td style="padding-left: 10px; padding-top: 20px;"> <?php echo $resultGroupe['nbreEtudiant']; ?> </td>
                        <td style="padding-left: 10px;padding-top: 20px;"> <?php echo $resultGroupe['nbreJeton'];?> </td>
                        <td style="padding-left: 10px;padding-top: 20px;">
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" name="delete">
                                    Effacer Groupe
                                </button>
                            </div>
                        </td>
                        <?php }?>
                    </tr>
                </table>
        </div>

        <form style="padding-top: 40px;" class="login100-form validate-form" action="Script/addGroup.php" method="post">
        <div class="wrap-input100 validate-input" data-validate="Nom" style="border-bottom: 2px solid black;">
            <input class="input100" type="nom" name="nom" placeholder="Nom du groupe" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Nombre d'étudant" style="border-bottom: 2px solid black;">
            <input class="input100" type="nbreEtudiant" name="nbreEtudiant" placeholder="Nombre d'étudiants" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Nombre de jeton" style="border-bottom: 2px solid black;">
            <input class="input100" type="nbreJeton" name="nbreJeton" placeholder="Nombre de jeton(s)" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="container-login100-form-btn" style="padding-top: 10px;">
			<button class="login100-form-btn" name="create" type="submit" >
				Créer Groupe
			</button>
		</div>
        </form>
 </div>
</body>
</html>