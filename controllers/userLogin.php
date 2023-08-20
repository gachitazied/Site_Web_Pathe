<?php 
include '../models/user.php';
require_once "../controllers/userC.php";



if (isset($_GET['event']) && !empty($_GET['event'])) {

    if($event == "login"){
        $user = new usersC();

        $user->setemail_user($_POST['email']);
        $user->setpassword($_POST['password']);

        $user->login();
        
    }

}

?>