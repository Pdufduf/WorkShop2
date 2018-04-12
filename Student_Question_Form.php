<!DOCTYPE html>
<html>
<head>
<title>Questionnaire intervenants</title>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div id="mySidenav" class="sidenav">
        <h1>MENU</h1>
        <p><a href="Student.php">Accueil</a></p>
        <p><a href="Student_Question_Form.php">Formulaires de Questions</a></p>
        <p><a href="Student_Groups.php">Groupes</a></p>

        <footer>
            <p><a href="../WorkShop2/index.php">Déconnexion</a></p>
        </footer>
    </div>

    <div class="main">
        <form>
            <div class="profil">
                <?php
                session_start ();

                //Connexion à la base de données
                //(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
                $pdo = new PDO(
                    'mysql:host=localhost;dbname=helpcenter', 'root', '');

                //Sélection nom, prenom connexion
                $listeProf = $pdo->prepare('SELECT * FROM intervenant');
                $listeProf->execute();
                $resultProf = $listeProf->fetch();

                echo "Connecté en tant que " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
                ?>
            </div>
            <div class="h5"> Nom du Groupe : </div>
            <input type="text" class="form-control" id="nomGroupe" placeholder="Entrez votre groupe">
            <br>
            <div class="h5"> Liste des intervenants : </div>
            <select name="intervenants" class="btn btn-secondary dropdown-toggle">ss
                <?php while ($resultProf = $listeProf->fetch()) { ?>
                <option value="<?php echo$resultProf['email']?>"><?php echo $resultProf['nom'] . " " . $resultProf['prenom']; } ?></option>
            </select>
            <br/><br/>
            <div class="h5"> Question : </div>
            <div class="input-group">
                <textarea class="form-control" aria-label="Entrez votre question ici"></textarea>
            </div>
            <br>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn" name="envoyer" type="submit">
                    Envoyer question
                </button>
            </div>
        </form>
</div>
</body>
</html>