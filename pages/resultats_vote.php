<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css"/>
	<title>Résultats vote</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

</head>
<body>
	<?php
 include "config.php";
session_start();

?>
	<div class="container">
		<div class="bandeauHaut">

		<div class="logoHaut">
		</div>

		<a href="fin.php" class="fermer"></a>

		</div>

		<div class="rectangle">
				<div class="txtvote">
				<?php

				$score = $_SESSION['score']/$_SESSION['nbr_vote']*100;
				$score = round($score,0,PHP_ROUND_HALF_UP);
				echo $_SESSION['pseudo'].' a obtenu un score de réussite de : <br>'.$score.' %<br><br>';

				if ($score < 20){
					echo $_SESSION['pseudo'].', bois 3 gorgées !';
				}
				else if ($score >= 20 && $score < 40){
					echo $_SESSION['pseudo'].', bois 2 gorgées !';
				}
				else if ($score >= 40 && $score < 50){
					echo $_SESSION['pseudo'].', bois 1 gorgées !';
				}
				else {
					echo 'Félicitations, tu ne bois pas !';
				}

    			?> 
    		</div>
		</div>
 
		<div class="tours">
		<?php
			echo 'Tour : '.$_SESSION['nbr_toursOK'].'/'.$_SESSION['nbr_tours'];

		?>
		</div>
		<?php
		if ($_SESSION['nbr_toursOK'] == $_SESSION['nbr_tours']) {
			echo '<a href="fin.php" class="continuer"></a>';
		}
		else {
			echo '<a href="gage.php" class="continuer"></a>';
		}
		
		?>
</body>
</html>