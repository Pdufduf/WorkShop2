<?php
//on se connecte à la base de données:
try {
$pdo = new PDO('mysql:host=localhost;dbname=helpcenter','root','');
}
catch ( Exception $e){
echo "Connexion à la BDD impossible : ", $e->getMessage();
die();
}