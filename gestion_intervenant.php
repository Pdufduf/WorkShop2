<!DOCTYPE html>
<html>
<head>
<title>Gestion intervenant</title>
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
<div class="main">
    <div class="profil">
        <?php
        session_start ();

        //Connexion à la base de données
        //(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
        $pdo = new PDO(
            'mysql:host=localhost;dbname=helpcenter', 'root', '');

        //Sélection nom, prenom connexion
        $listeMatiere = $pdo->prepare('SELECT * FROM matiere');
        $listeMatiere->execute();

        echo "Connecté en tant que " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
        ?>
    </div>
    <form style="padding-top: 40px;" class="login100-form validate-form" action="Script/addIntervenant.php" method="post">
        <span class="login100-form-title p-b-34 p-t-27" style="color: black !important;">
                            Création d'un intervenant
                        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrez votre nom" style="border-bottom: 2px solid black;">
            <input class="input100" type="text" name="nom" placeholder="Nom" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Entrez votre prenom" style="border-bottom: 2px solid black;">
            <input class="input100" type="text" name="prenom" placeholder="Prenom" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Email" style="border-bottom: 2px solid black;">
            <input class="input100" type="email" name="email" placeholder="Email" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe" style="border-bottom: 2px solid black;">
            <input class="input100" type="password" name="pass" placeholder="Mot de passe" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe" style="border-bottom: 2px solid black;">
            <input class="input100" type="password" name="pass2" placeholder="Mot de passe (Recopiez le)" style="color: black !important; background: cornflowerblue;">
        </div>

        <div class="h5"> Liste des intervenants : </div>
        <select name="intervenants" class="btn btn-secondary dropdown-toggle">
            <?php while ($resultMatiere = $listeMatiere->fetch()) { ?>
            <option value="<?php echo$resultMatiere['email']?>"><?php echo $resultMatiere['nom']; } ?></option>
        </select>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn" style="margin-top: 20px;">
                Créer l'intervenant
            </button>
        </div>
    </form>
</div>
</body>

</html>