<?php
include '../controllers/offreC.php';
$offresC=new offresC();
$offresC->supprimeroffre($_GET["id_offre"]);
echo "erreur";
header('Location:table.php');
?>