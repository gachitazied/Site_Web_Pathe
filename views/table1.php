<?php


include '../controllers/contactC.php';

require_once '../controllers/session.php';






$contacts = new contactsC();
if(isset($_POST["typeContact"]))
{
if($_POST["typeContact"] == "triContact"){
  $listeContactC = $contacts->affichertriContact();
}
else if($_POST["typeContact"] == "searchContact"){
  $listeContactC = $contacts->afficherRechercheContact($_POST["searchContact"]);
}
}
else
$listeContactC = $contacts->affichercontact();












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
                        <img class="rounded-circle" src="images/logo3.png" alt="" style="width: 40px; height: 40px;">
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

           




            
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4" style="width: 1200px; height: 600px;" >
                            <h6 class="mb-4">Table Contact</h6>
                            <table class="table"  style="width: 1200px; height: 600px;"  >

 <!-- tri&recherche -->
<form class="d-none d-md-flex ms-4" method="POST">
    <input type="searchContact" name="searchContact" id="search" class="form-control bg-dark border-0" placeholder="Search Contact">
    <input type="hidden" name="typeContact" value="searchContact">
</form>

                <form class="d-none d-md-flex ms-4" action="" method="POST" >
                    <button type="triContact" class="btn btn-primary m-2" value="triContact" name="typeContact" >trier</button>
                </form>
 <!-- tri&recherche -->


 <form method="POST" action="generate_pdf1.php">
    <input type="hidden" name="type" value="pdf">
    <button type="submit" class="btn btn-success m-2">Generate PDF</button>
</form>
                                <thead>
                                    <tr>
                                        <th scope="col"> ID contact</th>
                                        <th scope="col">nom contact</th>
                                        <th scope="col">prenom contact</th>
                                        <th scope="col">email contact</th>
                                        <th scope="col">message contact</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                         foreach ($listeContactC as $contacts) {
                          ?>
                                    <tr>
                                       
                                        <td><?php echo $contacts['id_contact'];?> </td>
                                        <td><?php echo $contacts['nom_contact'];?></td>
                                        <td><?php echo $contacts['prenom_contact'];?></td>
                                        <td><?php echo $contacts['email_contact'];?></td>
                                        <td><?php echo $contacts['message_contact'];?></td>
                                       <td> <a href="DeleteContact.php?id_contact=<?php echo $contacts['id_contact']; ?>" class="btn">Delete</a></td>
                                       <td> <a href="FormUpdateContact.php?id_contact=<?php echo $contacts['id_contact']; ?>" class="btn">modifier</a></td>
                                       <td> <a href="formreponse.php?id_contact=<?php echo $contacts['id_contact'];?>"  class="btn">Reponse</a></td>
                                     
                                    </tr>
                                    
                            <?php
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>
            </div>

            <!-- Table End -->


                       
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