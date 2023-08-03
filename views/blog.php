<?php
include '../controllers/cinemaC.php';



$userC = new cinemasC();
$listeUserC = $userC->affichercinema();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ultras - Clothing Store eCommerce Store php Website Template</title>
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

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
          <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
          <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>
        
        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="shop.php" title="Men Jackets">Men Jackets</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Fashion">Fashion</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Casual Wears">Casual Wears</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Kids">Kids</a>
          </li>
        </ul>
      </div>
    </div>
    <header id="header">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <p>Let's talk! <strong>+57 444 11 00 35</strong>
                </p>
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p>Free shipping on a purchase value of $200</p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <li>
                    <a href="login.php">
                      <i class="icon icon-user"></i>
                    </a>
                  </li>
                  <li>
                    <a href="cart.php">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  <li>
                    <a href="wishlist.php">
                      <i class="icon icon-heart"></i>
                    </a>
                  </li>
                  <li class="user-items search-item pe-3">
                    <a href="#" class="search-button">
                      <i class="icon icon-search"></i>
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
                        <a href="index.php" class="item-anchor d-flex align-item-center" data-effect="Home">Home<i class=""></i></a>
                        <ul class="submenu">
                          <li><a href="index.php" class="item-anchor">Home</a></li>
                         
                        </ul>
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

    <section class="site-banner jarallax min-height300 padding-large" style="background: url(images/cinema.jpg) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Cinema</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.php">Home /</a>
              </span>
              <span class="item">Blog</span>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="latest-blog" class="post-grid padding-large">
      <div class="container">
        <div class="row d-flex flex-wrap">
        <h2 class="section-title">our Cinemas</h2>
       
        </div>
        <div class="row d-flex flex-wrap">
        <?php
       foreach ($listeUserC as $cinemas) {
       ?>
           
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.php">

              
                <img src="images/<?php echo $cinemas['img_cinema'];?>" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
           
              <div class="post-header">
                <h3 class="post-title">
                  <a href="shop.php?id_cinema=<?php echo $cinemas['id_cinema']; ?>"><?php echo $cinemas['nom_cinema'];?></a>
                </h3>
                <a  class="blog-categories"><?php echo $cinemas['lieu_cinema'];?></a>
              </div>
            </div>
          </article>



          <?php
     }
    ?>

 

 
    </section>



  
    

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