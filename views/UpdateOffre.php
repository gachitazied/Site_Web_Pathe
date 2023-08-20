<?php
include '../controllers/offreC.php';
$id_offre = $_GET["id_offre"];
$offresC = new offresC();
if(
    isset($_POST['register-img_offre'])&&isset($_POST['register-nom_offre'])&&isset($_POST['register-desc_offre'])&&isset($_POST['register-date_offre'])
  ) 
    
{
    $offres = new offres($_POST['register-img_offre'],$_POST['register-nom_offre'],$_POST['register-desc_offre'],$_POST['register-date_offre']);
    $offresC->modifieroffre($offres,$id_offre);
}
else
echo 'erreur';
header('Location: table3.php');
?>