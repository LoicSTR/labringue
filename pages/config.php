<?php
    // Connexion à la base de données

    define ('SERVER','localhost');
	define ('USER','root');
	define ('PASSWORD','root');
	define ('BASE','labringue');
    try {
        $connexion = new PDO ("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);

    }
    catch (Exception $e){
        echo 'erreur'.$e->getMessage();
    }
?>