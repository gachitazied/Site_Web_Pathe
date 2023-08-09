<?php
include '../controllers/offreC.php';
$offres = new offresC();
$id_offre = $_GET["id_offre"];
$listeoffreC = $offres->afficherDescOffre($id_offre);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ultras - Clothing Store eCommerce Store HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>
  <header id="header">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <p><strong></strong>
                </p>
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p></p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <li>
                    <a href="login.php">
                      <i class="icon icon-user"></i>
                    </a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.php">
                    <img src="images/main-logo.png" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                      <li class="menu-item has-sub">
                        <a href="index.php" class="item-anchor d-flex align-item-center" data-effect="Home">Films<i class=""></i></a>
               
                      </li>

                      <li class="menu-item has-sub">
                        <a href="blog.php" class="item-anchor" data-effect="Blog">Cinémas<i ></i></a>
            
                      </li>

                      <li><a href="contact.php" class="item-anchor" data-effect="Contact">Contact</a></li>

                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>


   
    <hr>


    <hr>
    <section class="contact-information padding-large">

    <?php
               foreach ($listeoffreC as $offres) {
                ?>
      <div class="container">
        <div class="row">
              
        
            <div class="col-md-6">

       

                 <div class="section-header">
                     <h2 class="section-title"><?php echo $offres['nom_offre'];?></h2>
                   </div>
                          <div class="contact-detail">
                             <div class="detail-list">
                                   <p><?php echo $offres['desc_offre'];?></p>
                                   <li>
                                  <a href="#"><i class=""></i>Offre valable à partir du : <?php echo $offres['date_offre'];?></a>
                                   </li>

              
                                 </ul>
                                </div>
                           </div>
                   <div class="image-holder zoom-effect">
                  <a href="single-post.html">
                  <img src="images/<?php echo $offres['img_offre'];?>" alt="post" class="post-image">
                 </a>
                  </div>
                </div>

            </div>
             

           

          <div class="col-md-6">
            <div class="contact-information">
              <div class="section-header">
                <h2 class="section-title">Inscription</h2>
              </div>

              <form name="contactform" action="AddInscri.php"  id="myForm" method="post" class="contact-form">
                <div class="form-item">


      


                  <input  type="text" id="nom" minlength="2" name="register-nom_inscri" placeholder="Nom*" class="u-full-width bg-light" >
                  <span id="errorname"></span>

                  <input type="text" id="prenom" minlength="2" name="register-prenom_inscri" placeholder="Prénom*" class="u-full-width bg-light" >
                  <span id="errorprenom"></span>

                  <input type="email" id="mail" name="register-email_inscri" placeholder="E-mail*" class="u-full-width bg-light" >
                  <span id="erroremail"></span>
                  
                  <input type="text" id="telephone" name="register-telephone_inscri" placeholder="TÉLÉPHONE *" class="u-full-width bg-light" >
                  <span id="errortelephone"></span>

                  <input type="text" id="nombre" name="register-nombre_inscri" placeholder="Nombre*" class="u-full-width bg-light" >
                  <span id="errornombre"></span>

                  <textarea class="u-full-width bg-light" id="mess" name="register-message_inscri" placeholder="Message" style="height: 180px;" ></textarea>
                  <span id="errormessage"></span>


                </div>

                <button type="submit" name="submit" class="btn btn-dark btn-full btn-medium">Envoyer</button>
              </form>


            </div>
   
        </div>
      </div>
      <?php
     }
    ?>
    </section>

    <script>
   let myForm = document.getElementById('myForm');

myForm.addEventListener('submit', function(e) {
  let mynom = document.getElementById('nom');
  let myprenom = document.getElementById('prenom');
  let mymail = document.getElementById('mail');
  let mytelephone = document.getElementById('telephone');
  let mynombre = document.getElementById('nombre');
  let mymsg = document.getElementById('mess');


  if (mynom.value == '') {
    let error = document.getElementById('errorname');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (myprenom.value == '') {
    let error = document.getElementById('errorprenom');
    error.innerHTML = "Le champs  est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (myprenom.value == '') {
    let error = document.getElementById('errortelephone');
    error.innerHTML = "Le champs  est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
  if (myprenom.value == '') {
    let error = document.getElementById('errornombre');
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
  if (mymsg.value == '') {
    let error = document.getElementById('errormessage');
    error.innerHTML = "Le champs est requis";
    error.style.color = 'red';
    e.preventDefault();
  }
})
              </script>
   

   
    <hr>


    <hr>
    <footer id="footer">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Ultras</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="about.php">About us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Conditions </a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.php">Our Journals</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Careers</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Affiliate Programme</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Ultras Press</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="faqs.php">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.php">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@ultras.com</a>
                </p>
                <p>Do you need assistance? Give us a call. <br>
                  <strong>+57 444 11 00 35</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Forever 2018</h5>
                <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube-play"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance-square"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </footer>


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>
</php>