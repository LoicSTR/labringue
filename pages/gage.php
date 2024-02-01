<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css"/>
	<title>Gage</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

</head>
<body>
<?php
include "config.php";
session_start();

$requete = "SELECT * from parties WHERE id = ( SELECT MAX( id )  AS idMax FROM parties );";
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

foreach ($liste as $element) {
 	$idtours = $element['id_nbr_tours'];
}
$idtours = $idtours*10;


$_SESSION['nbr_toursOK']++;


?>
	<div class="container">
		<div class="bandeauHaut">

		<div class="logoHaut">
		</div>

		<a href="fin.php" class="fermer"></a>

		</div>
		<div class="rectangle">
				<div class="gage">
				<?php
				session_start();

					$requete = "SELECT * FROM joueurs ORDER BY rand() LIMIT 1";
   					$resultat = $connexion->query($requete);
    				$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

    				foreach ($liste as $element) {
						echo $element['pseudo'].', ';
						$_SESSION ['pseudo']=$element['pseudo'];
					}

					
				    $requete = "SELECT gages.gage, categories.id FROM tables_categories
				   	INNER JOIN parties ON parties.id = tables_categories.id_parties
				   	INNER JOIN categories ON categories.id = tables_categories.id_categories
				   	INNER JOIN gages ON gages.id_categories = categories.id
				   	ORDER BY rand() LIMIT 1";

   					$resultat = $connexion->query($requete);
    				$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

				    foreach ($liste as $element) {
				        echo $element['gage'].' !';
					}

    			?> 
    		</div>
		</div>
		<div class="tours">
		<?php
			echo 'Tour : '.$_SESSION['nbr_toursOK'].'/'.$idtours;
		?>
		</div>

		<a href="vote.php" class="continuer"></a>

	</div>
	
</body>
</html>