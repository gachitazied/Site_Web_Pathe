<?php
include '../controllers/userC.php';
$user=new usersC();
$user->supprimeruser($_GET["id_user"]);

header('Location: TableUser.php');
?>