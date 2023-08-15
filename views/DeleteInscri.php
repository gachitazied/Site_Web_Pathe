<?php
include '../controllers/inscriC.php';
$inscrisC = new inscrisC();
$id_inscri = $_GET['id_inscri'];


$inscrisC->supprimerinscri($id_inscri);
header("Location: table.php");
?>