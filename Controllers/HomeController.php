<?php

include('Models/Images_Brutes.php');
include('Models/Meme.php');

//récupération des memes créés pour les afficher sur le home
$pickMemes = pickMemesGenerated();
$pickLastMemes = pickAFewLastMemes();



include('Views/HomeView.php');