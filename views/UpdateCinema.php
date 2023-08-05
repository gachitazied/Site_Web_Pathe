<?php
include '../controllers/cinemaC.php';
$id_cinema = $_GET["id_cinema"];
$cinemasC = new cinemasC();
if(
    isset($_POST['img_cinema'])&&isset($_POST['nom_cinema'])&&isset($_POST['lieu_cinema'])
  ) 
    
{
    $cinemas = new cinemas($_POST['img_cinema'],$_POST['nom_cinema'],$_POST['lieu_cinema']);
    $cinemasC->modifiercinema($cinemas,$id_cinema);
}
else
echo 'erreur';
header('Location: table.php');
?>