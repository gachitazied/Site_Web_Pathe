<?php
include '../controllers/userC.php';
$id_user = $_GET["id_user"];
$usersC=new usersC();
if(
    isset($_POST['register-nom_user']) &&isset($_POST['register-prenom_user'])&&isset($_POST['register-num_tel'])&&isset($_POST['register-adresse_user'])&&isset($_POST['register-role'])&&isset($_POST['register-email_user'])&&isset($_POST['register-password'])
 )
 
    
{
    $users = new users($_POST['register-nom_user'],$_POST['register-prenom_user'],$_POST['register-num_tel'],$_POST['register-adresse_user'],$_POST['register-role'],$_POST['register-email_user'],$_POST['register-password']);
    $usersC->modifieruser($id_user,$users);
}
else
echo 'erreur';
header('Location: TableUser.php');
?>