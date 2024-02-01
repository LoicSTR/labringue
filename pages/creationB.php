<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css"/>
	<title>1-Créer une bringue</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	include "config.php";
	if (isset($_POST['suppr'])){
		$requete = "DELETE FROM joueurs ORDER BY ID DESC LIMIT 1";
		$resultat = $connexion->query($requete);
	}

	?>
	<div class="container">
		<div class="bandeauHaut2">

			<div class="logoHaut">
			</div>

		</div>
		
		<div class="titre2">
			Qui sont nos bringueurs du jour ?
		</div>

		<form method="POST">
			<div class="bandeauPseudo">	
				<input class="formulaire" type="text" size=20 name="pseudo" id="pseudo" placeholder="Entre ton pseudo">
	
				<input class="plus" type="submit" name="btn" value="">
					<?php

					if ($_POST['pseudo'] != "") {

						$requete = "SELECT * FROM joueurs";
						$resultat = $connexion->query($requete);
						$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

						if (count($liste) < 12){
							$requete = "INSERT INTO joueurs (id, pseudo) VALUES (NULL, '".$_POST['pseudo']."')";
							$resultat = $connexion->exec($requete);
						}
						else {
							echo "<script>alert('La limite de joueurs est atteinte')</script>";
						}
					}

					?>
			</div>
		</form>

		<div class="rectangle">
			Joueurs :<br><br>
			<?php

			$requete = "SELECT * from joueurs";

			$resultat = $connexion->query($requete);

			$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

			foreach ($liste as $element) {
 			echo $element['pseudo'].'<br>';
			}
			?>

		</div>
		
			<form action="creationB.php" method="POST">
				<input class="annuler" type="submit" name="suppr" value="Annuler">
			</form>
		<?php
			if (count($liste) >= 3) {
				echo '<a href="parametre.php" class="continuer"></a>';
			}
			else {
				echo '<div style="margin-top : 20px; color: #eb595a; ">La bringue se joue miminum à 3 joueurs</div>';
			}
		?>	
	</div>
</body>
</html>