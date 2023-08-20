<?php
include '../controllers/reponseC.php';
$reponsesC=new reponsesC();
$reponsesC->supprimerreponse($_GET["id_reponse"]);
echo "erreur";
header('Location:table2.php');
?>