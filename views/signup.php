<?php
include '../controllers/userC.php';
$user=new usersC();

if(

    isset($_POST['register-nom_user'])
    &&isset($_POST['register-prenom_user'])
    &&isset($_POST['register-num_tel'])
    &&isset($_POST['register-adresse_user'])
    &&isset($_POST['register-role'])
    &&isset($_POST['register-email_user'])
    &&isset($_POST['register-password'])

){
    $users = new users($_POST['register-nom_user'],
    $_POST['register-prenom_user'],
    $_POST['register-num_tel'],
    $_POST['register-adresse_user'],
    $_POST['register-role'],
    $_POST['register-email_user'],
    $_POST['register-password']);
    $user->ajouteruser($users);
    header('Location: signup.php');

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ArabSoft Ciné</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ArabSoft Ciné</h3>
                            </a>
                          
                        </div>
                        <form action="" id="myForm" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nom" placeholder="jhondoe" name="register-nom_user">
                            <label for="floatingText">Nom </label>
                            <span id="errornom"></span>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="prenom" placeholder="bguir"  name="register-prenom_user">
                            <label for="floatingText">Prenom</label>
                            <span id="errorprenom"></span>
                        </div>  

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="num" placeholder="+216 95 564 546"  name="register-num_tel">
                            <label for="floatingText">Numéro telephone</label>
                            <span id="errornumero"></span>
                        </div> 
                        <div class="form-floating mb-3">
                        <select class="form-select" id="role" aria-label="Role" name="register-role" >
                                <option value="client">Client</option>
                                <option value="admin">Admin</option>
                            </select>
                            <label for="floatingText">Role</label>
                            <span id="errorrole"></span>
                        </div> 
 

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="adresse" placeholder="Rue Raoued"  name=" register-adresse_user">
                            <label for="floatingText">Adresse</label>
                            <span id="erroradresse"></span>
                        </div>  


                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="mail" placeholder="name@example.com"  name="register-email_user" >
                            <label for="floatingInput">Email address</label>
                            <span id="erroremail"></span>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="mdp" placeholder="Password"  name="register-password" >
                            <label for="floatingPassword">Password</label>
                            <span id="error"></span>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeGNzUjAAAAAPye1rqpJ2zACIyKXCT_xkMduHZR"></div> 
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Pas encore inscrit ?<a href="signin.php">S'inscrire</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>



    <script>
   let myForm = document.getElementById('myForm');

myForm.addEventListener('submit', function(e) {
  let mynom = document.getElementById('nom');
  let myprenom = document.getElementById('prenom');
  let mynum = document.getElementById('num');
  let myrole = document.getElementById('role');
  let myadresse = document.getElementById('adresse');
  let mymail = document.getElementById('mail');
  let mymdp = document.getElementById('mdp');


  if (mynom.value == '') {
    let error = document.getElementById('errornom');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (myprenom.value == '') {
    let error = document.getElementById('errorprenom');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (mynum.value == '') {
    let error = document.getElementById('errornumero');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (myrole.value == '') {
    let error = document.getElementById('errorrole');
    error.innerHTML = "Le champs  est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (myadresse.value == '') {
    let error = document.getElementById('erroradresse');
    error.innerHTML = "Le champs  est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (mymail.value == '') {
    let error = document.getElementById('erroremail');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (mymdp.value == '') {
    let error = document.getElementById('error');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
})
              </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>