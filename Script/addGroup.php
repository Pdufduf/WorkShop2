<?php
/**
 * Created by PhpStorm.
 * User: pauld
 * Date: 10/04/2018
 * Time: 10:42
 */

include "../pdo.php";


//On vérifie que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["nom"]) && isset($_POST["nbreEtudiant"]) && isset($_POST["nbreJeton"])){
    //Puis on stock le résultat dans la base de données :
    $query = $bdd->prepare('INSERT INTO groupe SET nom="'.$_POST["nom"].'", nbreEtudiant="'.$_POST["nbreEtudiant"].'", nbreJeton="'.$_POST["nbreJeton"].'"');
    $query->execute();
    header('Location: ../Resp_Etudiant_Groupe.php');
    exit();
}
?>