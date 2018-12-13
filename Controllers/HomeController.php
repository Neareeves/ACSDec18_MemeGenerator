<?php

include('Models/Images_Brutes.php');
include('Models/Meme.php');

//récupération des memes créés pour les afficher sur le home
$pickMemes = pickAFewMemes();

var_dump($pickMemes['titre']);
echo $pickMemes['titre'];

include('Views/HomeView.php');