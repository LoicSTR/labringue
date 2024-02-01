<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css">
	<title>Fin</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>
<body>
	<?php header ("Refresh: 1;URL=index.html");?>
	<?php
	include "config.php";
	


	$requete = "DELETE FROM joueurs";
	$resultat = $connexion->query($requete);

	$requete = "DELETE FROM tables_categories";
	$resultat = $connexion->query($requete);
	
	$requete = "DELETE FROM parties";
	$resultat = $connexion->query($requete);
	?>
	<div class="container">

		<div class="logo">
		</div>

		<div class="titre">
			La partie est finie
		</div>

		<div class="credit">
			Tom Naulleau / Loïc Souêtre
		</div>

	</div>

</body>
</html>