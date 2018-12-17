<?php
session_start();
include('Models/Images_Brutes.php');
include('Models/Meme.php');

// $randomNum = rand(1, 45);
// $randomNum1 = rand(1, 45);
// $randomNum2 = rand(1, 45);
// $randomNum3 = rand(1, 45);
// $randomNum4 = rand(1, 45);
// $randomNum5 = rand(1, 45);
// $randomNum6 = rand(1, 45);
// $randomNum7 = rand(1, 45);
// $randomNum8 = rand(1, 45);
// $randomNum9 = rand(1, 45);


$len = 44;   // total number of numbers
$min = 1;  // minimum
$max = 44;  // maximum
$range = []; // initialize array
foreach (range(0, $len - 1) as $i) {
  while(in_array($num = mt_rand($min, $max), $range));
  $range[] = $num;
}



/*********upload des photos des utilisateurs*****
+*******/
if (isset($_POST['envoyer'])) {


  $temporarychoice = $_FILES['upload']['tmp_name'];

  $definitivePathName = 'upload/' . $_FILES['upload']['name'];

// recup extension du fichier

  $extension = substr(strrchr($_FILES['upload']['name'], "."), 1);

// A tester si tri des extensions fonctionne
  if ($extension == 'jpg') {

  $newName = $_POST['fileName'] . '.' . $extension;
  $name=$_POST['fileName'];
  $definitivePathName = 'upload/' . $newName;




    $moveIsOk = move_uploaded_file($temporarychoice, $definitivePathName);


    $pathName = insertFile($definitivePathName,$name) ;
    $_SESSION['pathPic']= $pathName['chemin_img'];
    $pathPic=$_SESSION['pathPic'];

    if ($moveIsOk) {
      $message = "The file has been uploaded in ..." . $definitivePathName;
    } else {
      $message = "Error, the file couldn't be downloaded.";
    }
    echo $message;
  }

} else {
//echo "Veuillez s'il vous plait ne charger que des fichiers JPEG.";
}

// Quand la photo provient d'un upload et que le formulaire des deux textes et du nom a été envoyé avec Ajax
if (isset($_POST['nommeme']) && !empty($_SESSION['pathPic'])) {

  $Xhaut =$_POST['Xhaut'];
  $Yhaut=$_POST['Yhaut'];
  $Xbas=$_POST['Xbas'];
  $Ybas = $_POST['Ybas'];
  $text_h=$_POST['textehaut'];
  $text_b=$_POST['textebas'];
  $nom=$_POST['nommeme'];
  $imageAMontrer=$_SESSION['pathPic'];

  $imageAMontrerCourt=substr($imageAMontrer, 33, strlen($imageAMontrer));
  $sunset = imagecreatefromjpeg($imageAMontrer);

  $black = imagecolorallocate($sunset, 230, 230, 230);
  $font_path = '/var/www/html/Projet_13_memeR/fonts/Bangers-Regular.ttf';
  $image = substr($imageAMontrerCourt, (strpos($imageAMontrerCourt, '/')+1));

  $img_size = getimagesize($imageAMontrer);
    //getimagesize : index['3'] contient la chaine à placer dans les balises html /  index['0'] -> largeur / index['1']-> hauteur.

//la police fait 1/8e de l'image
  $taillePolice = $img_size['1']/13;

//Si les textes n'ont pas été positionnés sur l'image, un positionnement par défaut est appliqué, calculé sur la hauteur de l'image
  if (($Yhaut != "undefined") && ($Ybas != "undefined") && ($Xhaut != "undefined") && ($Xbas != "undefined")) {

    $yTexteHaut=$Yhaut+($img_size['1']/20);
    $yTexteBas=$Ybas+($img_size['1']/20);
    $xTexteHaut=$Xhaut;
    $xTexteBas=$Xbas;

  } else {

    $yTexteHaut=($taillePolice+($img_size['1']/20));
    $yTexteBas=($img_size['1']-($img_size['1']/20));
    $xTexteHaut=0;
    $xTexteBas=0;

  }

      // Prints text on image, top and then bottom
  imagettftext($sunset, $taillePolice, 0, $xTexteHaut, $yTexteHaut, $black, $font_path, $text_h);
  imagettftext($sunset, $taillePolice, 0, $xTexteBas, $yTexteBas, $black, $font_path, $text_b);

  $chemin = $_SERVER['DOCUMENT_ROOT'].'/Projet_13_memeR/Images';



    // Create the picture : first parametre, the picture, seconde, the path where it will be stored
  $imageFinale = imagejpeg($sunset,$chemin."/".$nom);

    //chemin complet de l'image, à placer dans les requètes des Models pour remplir la base de données, puis afficher ailleurs les memes.
  $cheminImageFinale = $chemin.'/'.$nom;
    // Clear Memory
  imagedestroy($sunset);
  unset($_SESSION['pathPic']);


//Si l'image provient d'une sélection par javascript au click sur les propositions
} else if (isset($_POST['nommeme'])) {


//on récupère ici les variables JS envoyées avec ajax
  $text_h=$_POST['textehaut'];
  $text_b=$_POST['textebas'];
  $nom=$_POST['nommeme'];
  $imageAMontrer=$_POST['imageAMontrer'];

  /*on récupère les coordonnées*/
  $Xhaut =$_POST['Xhaut'];
  $Yhaut=$_POST['Yhaut'];
  $Xbas=$_POST['Xbas'];
  $Ybas = $_POST['Ybas'];


//imageAMontrer : l'url complète de l'image

 // header('Content-type: image/jpeg');

//on récupère l'url à partir de l'index de l'image (avec Images/...)
  $imageAMontrerCourt=substr($imageAMontrer, 33, strlen($imageAMontrer));

    // Create Image From Existing File
  $sunset = imagecreatefromjpeg($imageAMontrerCourt);


      // Allocate A Color For The Text
  $black = imagecolorallocate($sunset, 230, 230, 230);

      // Set Path to Font File
  $font_path = '/var/www/html/Projet_13_memeR/fonts/Bangers-Regular.ttf';

      // Set Text to Be Printed On Image
// $text = "Prouut!";


  /*transformations image*/

//on récupère le nom seul du fichier image (sans Images/)
  $image = substr($imageAMontrerCourt, (strpos($imageAMontrerCourt, '/')+1));

  $img_size = getimagesize($imageAMontrer);
    //getimagesize : index['3'] contient la chaine à placer dans les balises html /  index['0'] -> largeur / index['1']-> hauteur.

//la police fait 1/8e de l'image
  $taillePolice = $img_size['1']/13;

//positionnement axe des ordonnées
//calculs directs en php:
// $yTexteHaut=($taillePolice+($img_size['1']/18));
// $yTexteBas=($img_size['1']-($img_size['1']/18));

//récupération des inputs cachés:
// si les textes n'ont pas été glissés sur l'image, un positionnement par défaut s'applique
  if (($Yhaut != "undefined") && ($Ybas != "undefined") && ($Xhaut != "undefined") && ($Xbas != "undefined")) {

    $yTexteHaut=$Yhaut+($img_size['1']/19);
    $yTexteBas=$Ybas+($img_size['1']/19);
    $xTexteHaut=$Xhaut;
    $xTexteBas=$Xbas;
    
  } else {

    $yTexteHaut=($taillePolice+($img_size['1']/19));
    $yTexteBas=($img_size['1']-($img_size['1']/19));
    $xTexteHaut=0;
    $xTexteBas=0;

  }
      // Print Text On Image
  imagettftext($sunset, $taillePolice, 0, $xTexteHaut, $yTexteHaut, $black, $font_path, $text_h);
  imagettftext($sunset, $taillePolice, 0, $xTexteBas, $yTexteBas, $black, $font_path, $text_b);

  $chemin = $_SERVER['DOCUMENT_ROOT'].'/Projet_13_memeR/Images';



    // Send Image to Browser
  $imageFinale = imagejpeg($sunset,$chemin."/".$nom);

    //chemin complet de l'image, à placer dans les requètes des Models pour remplir la base de données, puis afficher ailleurs les memes.
  $cheminImageFinale = $chemin.'/'.$nom;
    // Clear Memory
  imagedestroy($sunset);
}



//derniers mêmes enregistrés dans la BDD
//$pickLastMemes=pickLastGenerated();

//insertion des memes créés dans la base de données.
if (isset($cheminImageFinale)){
  
$chemindelindex=substr($cheminImageFinale, 13, strlen($cheminImageFinale));
 
if (isset($nom)) {
  $insertion = insertMemeUrl($cheminImageFinale, $nom, $chemindelindex);
}
}



include('Views/MemeView.php');