<?php
include '../controllers/cinemaC.php';
$cinema = new cinemasC();

if (
    isset($_FILES['register-img_cinema']) &&
    isset($_POST['register-nom_cinema']) &&
    isset($_POST['register-lieu_cinema'])
) {
    $mediaName = $_FILES['register-img_cinema']['name'];
    $mediaTempPath = $_FILES['register-img_cinema']['tmp_name'];
    
    $cinemas = new cinemas($mediaName, $_POST['register-nom_cinema'], $_POST['register-lieu_cinema']);
    $cinema->ajoutercinema($cinemas);
    
    // Déplacer le fichier téléchargé vers le répertoire souhaité (à adapter)
    move_uploaded_file($mediaTempPath, 'videos' . $mediaName);
    
    header('Location: table.php');
} else {
    echo 'Des champs obligatoires ne sont pas remplis.';
}
?>
