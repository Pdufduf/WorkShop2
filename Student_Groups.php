<!DOCTYPE html>
<html>
<head>
<title>Groupe des étudiants</title>
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
    <div id="mySidenav" class="sidenav">
        <h1>MENU</h1>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <p><a href="Student.php">Accueil</a></p>
        <p><a href="Student_Question_Form.php">Formulaires de Questions</a></p>
        <p><a href="Student_Groups.php">Groupes</a></p>

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

        echo "Connecté en tant que " . $_SESSION['nom'] . " " . $_SESSION['prenom'];
        ?>
    </div>
<div style="overflow-x:auto;">
	<table style="width:100%">
		<tr>
			<th> Groupe </th>
			<th> Remplissage </th>
			<th> Noms </th>
			<th> Rejoindre </th>
		</tr>
		<tr>
			<td>Groupe 1</td>
			<td>0/4</td>
			<td> Billy, Bobby, Jimmy, Carl </td>
			<td> Button Place Holder </td>
		</tr>
		<tr>
			<td>Groupe 2</td>
			<td>0/4</td>
			<td> Billy, Bobby, Jimmy, Carl </td>
			<td> Button Place Holder </td>
		</tr>
		<tr>
			<td>Groupe 3</td>
			<td>0/4</td>
			<td> Billy, Bobby, Jimmy, Carl </td>
			<td> Button Place Holder </td>
		</tr>
		<tr>
			<td>Groupe 4</td>
			<td>0/4</td>
			<td> Billy, Bobby, Jimmy, Carl </td>
			<td> Button Place Holder </td>
		</tr>
		<tr>
			<td>Groupe 5</td>
			<td>0/4</td>
			<td> Billy, Bobby, Jimmy, Carl </td>
			<td> Button Place Holder </td>
		</tr>

	</table>	
</div>
</div>
</body>

</html>