<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css"/>
	<title>Paramètres de la partie</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>
<body>
<?php

include "config.php";

?>

	<div class="container">

		<div class="bandeauHaut2">

			<div class="logoHaut">
			</div>

		</div>

		<div class="titre2">
			Paramètres de la partie
		</div>
		<form action="lancement.php" method="POST">
			<div class="rectangle">
				<div class="textrandom">
					Nombre de tours
				</div>
				<div class="tours">
					<input type="radio" id="dix" name="tours" value="1" checked>
				  	<label for="dix">10</label>
				  	<input type="radio" id="vingt" name="tours" value="2">
			  		<label for="vingt">20</label>
			  		<input type="radio" id="trente" name="tours" value="3">
			  		<label for="trente">30</label>
				</div>
				
				<div class="textrandom">
					Catégories de gage
				</div>
				<input type="checkbox" id="plus18" name="c1" checked>
		  		<label for="plus18">+18</label><br>
		  		<input type="checkbox" id="imitation" name="c2" checked>
		  		<label for="imitation">Imitation</label><br>
		  		<input type="checkbox" id="honteux" name="c3" checked>
		  		<label for="honteux">Honteux</label><br>
		  		<input type="checkbox" id="blabla" name="c4" checked>
		  		<label for="blabla">Blabla</label><br>
		  		<input type="checkbox" id="physique" name="c5" checked>
		  		<label for="physique">Physique</label><br>
			</div>

			<input  class="continuer" align="right" type="submit" name="btn" value="">

		</form>
	</div>
</body>
</html>