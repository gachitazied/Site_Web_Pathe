<?php
include '../controllers/cinemaC.php';
$cinemasC=new cinemasC();
$cinemasC->supprimercinema($_GET["id_cinema"]);
echo "erreur";
header('Location:table.php');
?>