<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #eef1f3;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 450px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #191919;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #8d8d8d;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            color: #191919;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
            background-color: #fff;
            color: #191919;
            border: 1px solid #191919;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #191919;
            color: #fff;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
            color: #8d8d8d;
        }
    </style>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <h2>ArabSoft Ciné</h2>

        <?php
    if (isset($_GET['error']) && $_GET['error'] === 'incorrect') {
        echo '<p style="color: red;">Identifiants incorrects. Veuillez réessayer.</p>';
    }
    ?>
        <form id="loginForm" method="post" action="login.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeGNzUjAAAAAPye1rqpJ2zACIyKXCT_xkMduHZR"></div> 
            <input type="submit" value="Se connecter">
           
        </form>
      
        <p class="form-footer">Pas encore inscrit ? <a href="signupFront.php">S'inscrire</a></p>
    </div>
</body>
</html>
