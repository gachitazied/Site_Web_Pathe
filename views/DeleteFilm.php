<?php
include '../controllers/filmC.php';
$filmsC = new filmsC();
$id_cinema = $_GET['id_cinema'];
$id_film = $_GET["id_film"];

$filmsC->supprimerfilm($id_film);
header("Location: TableFilm.php?id_cinema=$id_cinema");
?>