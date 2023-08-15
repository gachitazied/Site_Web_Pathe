<?php
include '../controllers/inscriC.php';
$inscrisC = new inscrisC();
$id_inscri = $_GET["id_inscri"];
if(
    isset($_POST['nom_inscri'])
    &&isset($_POST['prenom_inscri'])
    &&isset($_POST['email_inscri'])
    &&isset($_POST['telephone_inscri'])
    &&isset($_POST['nombre_inscri'])
    &&isset($_POST['message_inscri'])
    &&isset($_POST['nom_offre'])
    &&isset($_POST['id_offre'])
  ) 
    
{
    $inscris = new inscris(  $_POST['nom_inscri'],
    $_POST['prenom_inscri'],
    $_POST['email_inscri'],
    $_POST['telephone_inscri'],
    $_POST['nombre_inscri'],
    $_POST['message_inscri'],
    $_POST['nom_offre'],
    $_POST['id_offre']);
    $inscrisC->modifierinscri($id_inscri,$inscris);
}
else
echo 'erreur';
header('Location: table.php');
?>