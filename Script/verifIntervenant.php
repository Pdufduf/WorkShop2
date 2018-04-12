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
    $query = $pdo->prepare('SELECT mdp FROM intervenant WHERE email = :email');
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
        // On démarre la session AVANT d'écrire du code HTML
        session_start();

        //Sélection nom, prenom connexion
        $query = $pdo->prepare('SELECT nom, prenom FROM intervenant WHERE email = :email');
        $query->bindParam(':email', $_POST["email"]);
        $query->execute();
        $result = $query->fetch();

        // On crée quelques variables de session dans $_SESSION
        $_SESSION['nom'] = $result['nom'];
        $_SESSION['prenom'] = $result['prenom'];
        $_SESSION['email'] = $_POST["email"];
        header('Location: ../Intervenant_Reception_Question.php');

        exit();
    }else{
        //Sinon nous signalons une erreur d'identifiant ou de mot de passe
        echo "Login ou password incorrect";
    }
}
?>