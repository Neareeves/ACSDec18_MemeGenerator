<?php

include('Models/connectionBDD.php');



/***Ajoute les memes dans la base de données***/
// Insérer $cheminImageFinale et $nom

function insertMemeUrl($cheminImageFinale, $nom) {
	global $dbh;
	$insert = $dbh -> prepare("INSERT INTO `memes`(`url_memes`, `titre`, `cheminlocal`) VALUES (?,?,?);");
	$insert -> execute([$cheminImageFinale, $nom, $cheminImageFinale]);
	$insert -> fetchAll();
}



function pickAFewMemes() {
	global $dbh;
	$pickMemes = $dbh -> prepare ("SELECT * FROM `memes` LIMIT 15 ;");
	$pickMemes-> execute();
	$pickMemes->fetchAll();
}

//ligne en plus avec la date pour sort by date
//partages
//carrousel
//