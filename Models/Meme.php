<?php

include('Models/connectionBDD.php');



/***Ajoute les memes dans la base de données***/
// Insérer $cheminImageFinale et $nom

function insertMemeUrl($cheminImageFinale, $nom) {
	global $dbh;
	$insert = $dbh -> prepare("INSERT INTO `memes`(`url_memes`, `titre`, `cheminlocal`,`date_ajout`) VALUES (?,?,?, NOW());");
	$insert -> execute([$cheminImageFinale, $nom, $cheminImageFinale]);
	$insert -> fetchAll();
}



function pickAFewMemes() {
	global $dbh;
	$pickMemes = $dbh -> prepare ("SELECT * FROM `memes` LIMIT 15 ;");
	$pickMemes-> execute();
	$pickMemes->fetchAll();
}

function pickLastGenerated() {
		global $dbh;
	$pickLastMemes = $dbh -> prepare ("SELECT * FROM `memes` ORDER BY `date_ajout` ASC LIMIT 15 ;");
	$pickLastMemes-> execute();
	return $pickLastMemes->fetchAll();
}
	
//ligne en plus avec la date pour sort by date
//partages
//carrousel
//