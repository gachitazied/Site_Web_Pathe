<?php
include '../controllers/reservationC.php';
$reservationsC=new reservationsC();
$reservationsC->supprimerreservation($_GET["id_reservation"]);
echo "erreur";
header('Location:table5.php');
?>