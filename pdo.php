<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=helpcenter;charset=utf8', 'root', '');
        echo "OUI";
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>

