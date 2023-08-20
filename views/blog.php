<?php
include '../controllers/cinemaC.php';
$cinemaC = new cinemasC();
$listecinemaC = $cinemaC->affichercinema();



include '../controllers/offreC.php';
$offreC = new offresC();
$listeoffreC = $offreC->afficheroffre();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ArabSoft Ciné</title>
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
                    <img src="images/logo3.png" alt="logo">
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

    <section id="billboard" class="overflow-hidden">


 
    
      <button class="button-prev">
        <i class="icon icon-chevron-left"></i>
      </button>
      <button class="button-next">
        <i class="icon icon-chevron-right"></i>
      </button>

      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
        <?php
       foreach ($listecinemaC as $cinemas) {
       ?>
          <div class="swiper-slide" >
          <video autoplay loop muted class="banner-video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    <source src="videos/<?php echo $cinemas['img_cinema'];?>" type="video/mp4">

  </video>
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="banner-title"><?php echo $cinemas['nom_cinema'];?></h2>
                    <p><?php echo $cinemas['lieu_cinema'];?></p>
                    <div class="btn-wrap">
                      <a href="shop.php?id_cinema=<?php echo $cinemas['id_cinema']; ?>"  class="btn btn-light btn-medium d-flex align-items-center" tabindex="0">show film<i class="icon icon-arrow-io"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
     }
    ?>
        </div>
      </div>




    </section>


    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title">À l'affiche</h2>
 
        </div>
        <div class="row d-flex flex-wrap">
        <?php
       foreach ($listeoffreC as $offreC) {
       ?>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="images/<?php echo $offreC['img_offre'];?>" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">

              <div class="post-header">
                <h3 class="post-title">
                  <a><?php echo $offreC['nom_offre'];?></a>
                </h3>
                <a href="InscriOffre.php?id_offre=<?php echo $offreC['id_offre'];?>" class="blog-categories"><?php echo $offreC['nom_offre'];?></a>
              </div>
            </div>
          </article>
          
          <?php
     }
    ?>
        </div>
      </div>
    </section>
    <hr>


<hr>
<footer id="footer">
  <div class="container">
    <div class="footer-menu-list">
      <div class="row d-flex flex-wrap justify-content-between">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Ultra</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="index.php">Nos Films </a>
              </li>

              <li class="menu-item">
                <a href="blog.php">Nos Offres</a>
              </li>
              <li class="menu-item">

        
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Service</h5>
            <ul class="menu-list list-unstyled">
              
              <li class="menu-item">
                <a href="contact.php">Contact</a>
              </li>
 
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Contact Us</h5>
            <p>Contactez nous <a href="#" class="email">ArabSoft@gmail.com</a>
            </p>
            <p>Nos Telephone 7/7 24/24 <br>
              <strong>+216 72 444 555</strong>
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