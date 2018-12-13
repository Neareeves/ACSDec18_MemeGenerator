<?php

include('Models/connectionBDD.php');

function insertFile($definitivePathName,$name) {
	global $dbh;
	$insertFile = $dbh -> prepare("INSERT INTO `images_brutes`(`Url_imgbrutes`, `nom_imgbrutes`, `chemin_img`) VALUES (?,?,?);");
	$insertFile -> execute([$definitivePathName, $name, $definitivePathName]);
	$insertFile -> fetchAll();
	$idInseredFile = $dbh -> lastInsertId();
	$inseredFile = $dbh -> prepare("SELECT * FROM `images_brutes` WHERE ID_imgbrutes = ".$idInseredFile.";");
	$inseredFile ->execute();
	return $inseredFile -> fetch();
  }


