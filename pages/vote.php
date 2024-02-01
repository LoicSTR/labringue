<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" media="screen" type="text/css" href="../css/styles.css"/>
	<title>Vote</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

</head>
<body>
<?php
session_start();
include "config.php";
$requete = "SELECT * FROM joueurs";
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);


$nbr_vote = count($liste) - 1;

if ($_POST['vote'] == ""){
	$_SESSION['nbr_voteOK'] = 0;
	$_SESSION['score'] = 0;
}

$_SESSION['nbr_voteOK']++;

if ($_POST['vote'] == "like"){
   	$_SESSION['score']++;
}

if ($_SESSION['nbr_voteOK'] > $nbr_vote){
	header ("Refresh: 0;URL=resultats_vote.php");
}

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
				
				echo 'La prestation de '.$_SESSION['pseudo'].' était-elle convaincante ?';

    			?> 
    		</div>
		</div>

		<div class="vote">	
			<form action="vote.php" method="POST" id="like">
				<input class="like" type="submit" value="">
				<input type="hidden" name="vote" value="like">
			</form>
			<form action="vote.php" method="POST" id="dislike">
				<input class="dislike" type="submit" value="">
				<input type="hidden" name="vote" value="dislike">
			</form>
		</div>
		<div class=tours>
			<?php


			echo "Vote ".$_SESSION['nbr_voteOK']."/".$nbr_vote;
			$_SESSION['nbr_vote'] = $nbr_vote;

			
			?>
		</div>
	</div>
</body>
</html>