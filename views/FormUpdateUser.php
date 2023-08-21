<?php
include '../controllers/userC.php';
$usersC = new usersC();
$id_user = $_GET["id_user"];
$users = $usersC->recupereruser($id_user);
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


               <!-- Sidebar Start -->
               <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ArabSoft Ciné</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
       
                </div>
                <div class="navbar-nav w-100">
          
                   
                    <a href="form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            
                    
            
                    <a href="TableUser.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Table user</a>

                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Tables</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="table.php" class="dropdown-item">Cinemas</a>
                            <a href="table1.php" class="dropdown-item">Contacts</a>
                            <a href="table2.php" class="dropdown-item">Reponses</a>
                            <a href="table3.php" class="dropdown-item">Offres</a>
                            <a href="table4.php" class="dropdown-item">Inscriptions</a>
                            <a href="table5.php" class="dropdown-item">Reservation</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->



        <!-- Content Start -->
        <div class="content">
                       <!-- Navbar Start -->
                       <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                            <a href="../controllers/logoutuser.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                 


                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">form film</h6>
                            <form class="forum"  method="POST"  onsubmit="return submitValidation()" action="UpdateUser.php?id_user= <?php echo $id_user ?>" >
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">nom </label>
                                    <input type="text" class="form-control"  name="register-nom_user" value="<?php echo $users['nom_user']; ?>">
                                    
                                </div>
                                <div class="mb-3">  
                                    <label for="exampleInputPassword1" class="form-label">prenom</label>
                                    <input type="text" class="form-control"  name="register-prenom_user" value="<?php echo $users['prenom_user']; ?>">
                                </div>


                                <div class="mb-3">  
                                    <label for="exampleInputPassword1" class="form-label">num tel</label>
                                    <input type="text" class="form-control"  name="register-num_tel" value="<?php echo $users['num_tel']; ?>">
                                </div>

                                <div class="mb-3">  
                                    <label for="exampleInputPassword1" class="form-label">adresse</label>
                                    <input type="text" class="form-control"  name="register-adresse_user" value="<?php echo $users['adresse_user']; ?>">
                                </div>

                                <div class="mb-3">  
                                    <label for="exampleInputPassword1" class="form-label">role </label>
                                    <input type="text" class="form-control"  name="register-role" value="<?php echo $users['role']; ?>">
                                </div>

                                <div class="mb-3">  
                                    <label for="exampleInputPassword1" class="form-label">email</label>
                                    <input type="text" class="form-control"  name="register-email_user" value="<?php echo $users['email_user']; ?>">
                                </div>
                                <div class="mb-3">  
                                    <label for="exampleInputPassword1" class="form-label">password</label>
                                    <input type="text" class="form-control"  name="register-password" value="<?php echo $users['password']; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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