<?php
include '../controllers/userC.php';
$user=new usersC();

if(

    isset($_POST['register-nom_user'])&&isset($_POST['register-prenom_user'])&&isset($_POST['register-num_tel'])&&isset($_POST['register-adresse_user'])&&isset($_POST['register-role'])&&isset($_POST['register-email_user'])&&isset($_POST['register-password'])

){
    $users = new users($_POST['register-nom_user'],$_POST['register-prenom_user'],$_POST['register-num_tel'],$_POST['register-adresse_user'],$_POST['register-role'],$_POST['register-email_user'],$_POST['register-password']);
    $user->ajouteruser($users);
    header('Location: signup.php');

}
else
{
echo 'Erreur Du formulaire   / ZIED GACHITA';
}
?>