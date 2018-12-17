<?php


if (isset($_GET['file'])){

    // $realpath = realpath("index.php");
// $realpath = str_replace("Explorateur/index.php","",$realpath);
// $telecharge =$realpath.trim(strip_tags($_GET['dossier'])).'/'.trim(strip_tags($_GET['fichier']));
    $telecharge=$_GET['file'];
   

if (file_exists($telecharge)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($telecharge).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($telecharge));
    readfile($telecharge);
    exit;
}



}

?>