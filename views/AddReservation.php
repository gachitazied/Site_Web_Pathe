<?php
include '../controllers/reservationC.php';
$reservation = new reservationsC();
$id_film = $_GET["id_film"];


if(

    isset($_POST['film_reservation'])
    &&isset($_POST['salle_reservation'])
    &&isset($_POST['date_reservation'])
    &&isset($_POST['heure_reservation'])
    &&isset($_POST['place_reservation'])
    &&isset($_POST['email_reservation'])
  
){
    $reservations = new reservations($_POST['film_reservation'],
    $_POST['salle_reservation'],
    $_POST['date_reservation'],
    $_POST['heure_reservation'],
    $_POST['place_reservation'],
    $_POST['email_reservation']);
    $reservation -> ajouterreservation($reservations);
    header("Location: about.php?id_film=$id_film");

}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}
?>