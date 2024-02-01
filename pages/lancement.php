<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css"/>
	<title>Lancement de la partie</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
<meta http-equiv="refresh" content="2;url=gage.php"/>
</head>
<body>
<?php
include "config.php";
session_start();


$_POST['tours'];

$requete = "INSERT INTO parties (id, id_nbr_tours) VALUES (NULL, '".$_POST['tours']."')";
$resultat = $connexion->exec($requete);

$requete = "SELECT * from parties WHERE id = ( SELECT MAX( id )  AS idMax FROM parties );";
$resultat = $connexion->query($requete);

$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

foreach ($liste as $element) {
 	$idparties = $element['id'];
}


if ($_POST['c1'] != "") {
	$requete = "INSERT INTO tables_categories (id, id_parties, id_categories) VALUES (NULL, '".$idparties."', 1)";
	$resultat = $connexion->exec($requete);
}
if ($_POST['c2'] != "") {
	$requete = "INSERT INTO tables_categories (id, id_parties, id_categories) VALUES (NULL, '".$idparties."', 2)";
	$resultat = $connexion->exec($requete);
}
if ($_POST['c3'] != "") {
	$requete = "INSERT INTO tables_categories (id, id_parties, id_categories) VALUES (NULL, '".$idparties."', 3)";
	$resultat = $connexion->exec($requete);
}
if ($_POST['c4'] != "") {
	$requete = "INSERT INTO tables_categories (id, id_parties, id_categories) VALUES (NULL, '".$idparties."', 4)";
	$resultat = $connexion->exec($requete);
}
if ($_POST['c5'] != "") {
	$requete = "INSERT INTO tables_categories (id, id_parties, id_categories) VALUES (NULL, '".$idparties."', 5)";
	$resultat = $connexion->exec($requete);
}

$_SESSION['nbr_toursOK'] = 0;

?>

	<div class="container">

		<div class="bandeauHaut2">

			<div class="logoHaut">
			</div>

		</div>

		<div class="titre2">
			Préparez-vous
		</div>
	
		<div class="rectangle" style="margin-top: 50px"> La partie va commencer
		</div>

		<div class="tours">
			<img src="../images/chargement.gif" width="150px">
		</div>
	</div>
</body>
</html>