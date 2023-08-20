<?php
require_once '../controllers/userC.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event']) && $_POST['event'] === 'login') {
    $user = new usersC();

    $user->setemail_user($_POST['email']);
    $user->setpassword($_POST['password']);

    // Appel à la méthode de connexion (assurez-vous que cela est correctement implémenté dans votre userC.php)
    $user->login();
} else {
    // Gérer le cas où l'événement n'est pas correctement défini
    echo "Invalid request.";
}
?>
