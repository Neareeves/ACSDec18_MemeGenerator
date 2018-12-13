<?php

include('Models/Images_Brutes.php');
include('Models/Meme.php');

//récupération des memes créés pour les afficher sur le home
$PickSomeMemes = pickAFewMemes();




include('Views/HomeView.php');