<?php
include '../controllers/offreC.php';
$offre = new offresC();

if(

    isset($_POST['register-img_offre'])&&isset($_POST['register-nom_offre'])&&isset($_POST['register-desc_offre'])&&isset($_POST['register-date_offre'])
  
){
    $offres = new offres($_POST['register-img_offre'],$_POST['register-nom_offre'],$_POST['register-desc_offre'],$_POST['register-date_offre']);
    $offre -> ajouteroffre($offres);
    header('Location: table.php');

}
else
{
echo 'el forum mazelll na9esss hooooooooooooooy';
}
?>