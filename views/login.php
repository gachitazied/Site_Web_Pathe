<?php
// Connexion à la base de données
include '../controllers/usersC.php';

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'site_web_stage';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Traitement des données de connexion
if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Vérification de l'email et du mot de passe dans la base de données
	$sql = "SELECT * from users where email_user='$email' and password ='$password'";
	$result = mysqli_query($conn, $sql);

	// Vérification si les données correspondent à un utilisateur existant
    if (mysqli_num_rows($result) == 1) {
        // Assuming you have fetched the role from the database and stored it in $user_role
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
    
        session_start();
        $_SESSION['email_user'] = $email;
    
        if ($role === 'admin') {
            header('location: form.php');
        } elseif ($role === 'client') {
            header('location: index.php');
        }
        // Add any other role conditions here
    } else {
        // Les informations de connexion sont incorrectes
        header('location: signin.php');
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
