<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if ($user->role == 'admin') {
        header('Location: table.php');
        exit(); 
    }
} else {
    $user = null;
}
?>
