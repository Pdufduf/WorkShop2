<?php
/**
 * Created by PhpStorm.
 * User: pauld
 * Date: 10/04/2018
 * Time: 10:42
 */

// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO etudiant(nom, prenom, dateNaissance, email, mdp, classe) 
VALUES(:nom, :prenom, :dateNaissance, :email, :mdp, :classe)');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'dateNaissance' => $dateNaissance,
    'email' => $email,
    'mdp' => $pass_hache,
    'classe' => $classe));