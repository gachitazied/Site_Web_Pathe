<?php
include '../controllers/reservationC.php';
$reservationsC = new reservationsC();
$id_reservation = $_GET["id_reservation"];
if(
    isset($_POST['film_reservation'])
    &&isset($_POST['salle_reservation'])
    &&isset($_POST['date_reservation'])
    &&isset($_POST['heure_reservation'])
    &&isset($_POST['place_reservation'])
    &&isset($_POST['email_reservation'])

  ) 
    
{
    $reservations = new reservations(  $_POST['film_reservation'],
    $_POST['salle_reservation'],
    $_POST['date_reservation'],
    $_POST['heure_reservation'],
    $_POST['place_reservation'],
    $_POST['email_reservation']);
    $reservationsC->modifierreservation($reservations,$id_reservation);
}
else
echo 'erreur';
header('Location: table5.php');
?>