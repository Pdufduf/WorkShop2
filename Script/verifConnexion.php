<?php
/**
 * Created by PhpStorm.
 * User: pauld
 * Date: 10/04/2018
 * Time: 10:27
 */

//Connexion à la base de données
//(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
$pdo = new PDO(
    'mysql:host=localhost;dbname=helpcenter', 'root', '');

//Nous vérifions que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["email"]) && isset($_POST["pass"])){
    //Nous allons demander le hash pour cet utilisateur à notre base de données :
    $query = $pdo->prepare('SELECT mdp FROM etudiant WHERE email = :email');
    $query->bindParam(':email', $_POST["email"]);
    $query->execute();
    $result = $query->fetch();
    $hash = $result[0];

    //Nous vérifions si le mot de passe utilisé correspond bien à ce hash à l'aide de password_verify :
    $correctPassword = ($_POST["email"]);
        //password_verify($_POST["pass"], $hash);
    if($correctPassword){
        //Si oui nous accueillons l'utilisateur identifié
        echo "Bienvenue ".$_POST["email"];
    }else{
        //Sinon nous signalons une erreur d'identifiant ou de mot de passe
        echo "Login ou password incorrect";
    }
}
?>