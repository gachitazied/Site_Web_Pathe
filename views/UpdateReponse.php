<?php
include '../controllers/reponseC.php';
$reponsesC = new reponsesC();
$id_reponse = $_GET["id_reponse"];
if(
    isset($_POST['email_reponse'])&&isset($_POST['reponse_reponse'])&&isset($_POST['id_contact'])
  ) 
    
{
    $reponses = new reponses($_POST['email_reponse'],$_POST['reponse_reponse'],$_POST['id_contact']);
    $reponsesC->modifierreponse($id_reponse,$reponses);
}
else
echo 'erreur';
header('Location: table3.php');
?>