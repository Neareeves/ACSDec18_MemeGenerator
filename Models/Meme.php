<?php

include('Models/connectionBDD.php');



/***Ajoute les memes dans la base de données***/
// Insérer $cheminImageFinale et $nom

function insertMemeUrl($cheminImageFinale, $nom, $chemindelindex) {
	global $dbh;
	$insert = $dbh -> prepare("INSERT INTO `memes`(`url_memes`, `titre`, `cheminlocal`,`date_ajout`) VALUES (?,?,?, NOW());");
	$insert -> execute([$cheminImageFinale, $nom, $chemindelindex]);
	return $insert -> fetchAll();
	// $idInseredMeme = $dbh -> lastInsertId();
	// $inseredMeme = $dbh -> prepare("SELECT * FROM `memes` WHERE Id_memes = ".$idInseredMeme.";");
	// $inseredMeme ->execute();
	// return $inseredMeme -> fetch();	
		
}



function pickAFewLastMemes() {
	global $dbh;
	$pickLastMemes = $dbh -> query("SELECT `Id_memes`, `url_memes`, `titre`, `cheminlocal`, `date_ajout` FROM `memes` LIMIT 6 ;");
	// $pickMemes-> execute(); add a group by date
	return $pickLastMemes -> fetchAll();
}


function pickMemesGenerated() {
		global $dbh;
	$pickMemes = $dbh -> query ("SELECT * FROM `memes` ORDER BY `date_ajout` ASC LIMIT 15 ;");
	//$pickLastMemes-> execute();
	return $pickMemes -> fetchAll();
}

function pickTheLastMeme() {
	global $dbh;
	$lastMeme = $dbh -> prepare("SELECT * FROM `memes` WHERE Id_memes IN(SELECT MAX(Id_memes) AS lastId FROM `memes`);");
	$lastMeme -> execute();
	return $lastMeme -> fetch();
	
  }
	
//ligne en plus avec la date pour sort by date
//partages
//carrousel
//