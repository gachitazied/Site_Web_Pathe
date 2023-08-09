<?php
include '../controllers/reponseC.php';
$reponsesC=new reponsesC();

if(

    isset($_POST['register-email_reponse'])&&isset($_POST['register-reponse_reponse'])&&isset($_POST['register-id_contact'])
  
){
    $reponses = new reponses($_POST['register-email_reponse'],$_POST['register-reponse_reponse'],$_POST['register-id_contact']);
    $reponsesC->ajouterreponse($reponses);
    header('Location: table.php');

}
else
{
echo 'error';
}
?>