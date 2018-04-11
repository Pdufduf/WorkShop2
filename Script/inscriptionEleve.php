<?php
/**
 * Created by PhpStorm.
 * User: pauld
 * Date: 10/04/2018
 * Time: 10:42
 */

include "../pdo.php";

//On vérifie que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["dateNaissance"]) && isset($_POST["pass"])
    && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["classe"]) && isset($_POST["pass2"])){
    //On vérifie que password et password2 sont identiques
    if($_POST["pass"] == $_POST["pass2"]){
        //On utilise alors notre fonction password_hash :
        $hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
        //Puis on stock le résultat dans la base de données :
        $query = $bdd->prepare('INSERT INTO etudiant (nom, prenom, dateNaissance, email
, mdp, telephone, classe) VALUES(:nom, :prenom, :dateNaissance, :email, :pass, :telephone, :classe);');
        $query->bindParam(':email', $_POST["email"]);
        $query->bindParam(':pass', $hash);
        $query->execute();
        header('Location: ../index.php');
        exit();
    }
}
?>