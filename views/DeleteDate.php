<?php
include '../controllers/dateC.php';
$datesC = new datesC();
$id_film = $_GET['id_film'];
$id_date = $_GET["id_date"];

$datesC->supprimerdate($id_date);
header("Location: TableDate.php?id_film=$id_film");
?>