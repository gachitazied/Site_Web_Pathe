<?php
include '../controllers/inscriC.php';
$inscrisC=new inscrisC();

if(

    isset($_POST['register-nom_inscri'])
    &&isset($_POST['register-prenom_inscri'])
    &&isset($_POST['register-email_inscri'])
    &&isset($_POST['register-telephone_inscri'])
    &&isset($_POST['register-nombre_inscri'])
    &&isset($_POST['register-message_inscri'])
    &&isset($_POST['register-nom_offre'])
    &&isset($_POST['register-id_offre'])
  
){
    $inscris = new inscris(
    $_POST['register-nom_inscri'],
    $_POST['register-prenom_inscri'],
    $_POST['register-email_inscri'],
    $_POST['register-telephone_inscri'],
    $_POST['register-nombre_inscri'],
    $_POST['register-message_inscri'],
    $_POST['register-nom_offre'],
    $_POST['register-id_offre']);
    $inscrisC->ajouterinscri($inscris);
    header('Location: blog.php');

}
else
{
echo 'error';
}
?>