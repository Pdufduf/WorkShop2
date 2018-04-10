<?php
/**
 * Created by PhpStorm.
 * User: pauld
 * Date: 10/04/2018
 * Time: 10:27
 */

//Vérificiation compte

session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "email" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe bel et bien (is set)
    if(empty($_POST['email'])) {
        echo "Le champ d'email est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])) {
            echo "Le champ mot de passe est vide.";
        } else {
            // les champs sont bien postés et pas vide, on sécurise les données entrées par l'étudiant:
            $email = htmlentities($_POST['email'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");

            //on se connecte à la base de données:
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=helpcenter','root','');
            }
            catch ( Exception $e){
                    echo "Connexion à la BDD impossible : ", $e->getMessage();
                    die();
            }

            //on vérifie que la connexion s'effectue correctement:
            if(!$pdo){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($pdo,"SELECT * FROM etudiant WHERE email = '".$email."' AND mdp = '".md5($MotDePasse)."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo "L'email ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['email'] = $email; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    header("Location: localhost:63342/WorkShop2/Student.html"); // Redirection du navigateur
                    exit;//on affiche pas le reste de la page pour faire une redirection parfaite et sans erreurs
                }
            }
        }
    }
}