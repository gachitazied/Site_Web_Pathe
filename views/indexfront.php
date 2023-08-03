<?php
include '../controllers/cinemaC.php';
$userC = new cinemasC();
$listeUserC = $userC->affichercinema();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>SnapX Photography by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="SnapX Photography Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Photos &amp; Videos</a>
                            <ul class="sub-menu">
                                <li><a href="contests.php">Contests</a></li>
                                <li><a href="contest-details.php">Single Contest</a></li>
                            </ul>
                        </li>
                        <li><a href="categories.php">cinema</a></li>
                        <li><a href="users.php">Users</a></li>
                    </ul>   
                    <div class="border-button">
                      <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                    </div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="" method="post">
                <label>Email / Username</label>
                <input name="username" type="text" id="username" />
              <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
              <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="" method="post">
                <label>Username</label>
                <input name="username" type="text" id="username" />
                <br />

                <label>Email Address</label>
                <input name="email" type="email" id="email" />
                <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>
        
    </section>
  </div>

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="header-text">
            <h2>Enter a world of <em>Photos</em> &amp; Amazing <em>Awards</em></h2>
            <p>SnapX Photography is a professional website template with 5 different php pages for maximum customizations. It is free for commercial usage. This Bootstrap v5.1.3 CSS layout is provided by TemplateMo Free CSS Templates.</p>
            <div class="buttons">
              <div class="big-border-button">
                <a href="contests.php">Explore SnapX Contest</a>
              </div>
              <div class="icon-button">
                <a href="https://youtube.com/templatemo" target="_blank"><i class="fa fa-play"></i> Watch Our Video Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->


  <section class="featured-items" id="featured-items">
 
    <div class="container">
    <?php
       foreach ($listeUserC as $cinemas) {
       ?>
      <div class="row">
        <div class="col-lg-12">
      
          <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/featured-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    
                    <ul>
                      <li><span><?php echo $cinemas['nom_cinema'];?></span> </li>
                      <li><span><?php echo $cinemas['lieu_cinema'];?></span> </li>
                    
                    </ul>
                  </div>
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
  
  </section>


  <section class="popular-categories">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Our Categories</h6>
            <h4>Check Out <em>Popular</em> Contest <em>Categories</em></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="categories.php">Discover All Categories</a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-01.png" alt="">
              </div>
              <div class="right">
                <h4>Nature Pic Contest</h4>
                <span><em>126</em> Available Contests</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/popular-01.png" alt="">
              <span class="category">Top Contest</span>
              <span class="likes"><i class="fa fa-heart"></i> 256</span>
            </div>
            <div class="border-button">
              <a href="contest-details.php">Browse Nature Pic Contests</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-02.png" alt="">
              </div>
              <div class="right">
                <h4>Random Pic Contest</h4>
                <span><em>116</em> Available Contests</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/popular-02.png" alt="">
              <span class="category">Top Contest</span>
              <span class="likes"><i class="fa fa-heart"></i> 256</span>
            </div>
            <div class="border-button">
              <a href="contest-details.php">Browse Random Pic Contests</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-03.png" alt="">
              </div>
              <div class="right">
                <h4>Portrait Pic Contest</h4>
                <span><em>164</em> Available Contests</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/popular-03.png" alt="">
              <span class="category">Top Contest</span>
              <span class="likes"><i class="fa fa-heart"></i> 256</span>
            </div>
            <div class="border-button">
              <a href="contest-details.php">Browse Portrait Pic Contests</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-04.png" alt="">
              </div>
              <div class="right">
                <h4>Space Pic Contest</h4>
                <span><em>135</em> Available Contests</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/popular-04.png" alt="">
              <span class="category">Top Contest</span>
              <span class="likes"><i class="fa fa-heart"></i> 256</span>
            </div>
            <div class="border-button">
              <a href="contest-details.php">Browse Space Pic Contests</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="closed-contests">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Closed Photography Contests</h6>
            <h4><em>Previous Contests</em> With Handpicked <em>Winners</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/closed-01.jpg" alt="">
                  <span class="winner"><em>Winner:</em> Anthony Soft</span>
                  <span class="price"><em>Award :</em> $1,600</span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>88 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">320 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/closed-02.jpg" alt="">
                  <span class="winner"><em>Winner:</em> Anthony Soft</span>
                  <span class="price"><em>Award :</em> $4,200</span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>96 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">410 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/closed-03.jpg" alt="">
                  <span class="winner"><em>Winner:</em> Anthony Soft</span>
                  <span class="price"><em>Award :</em> $3,200</span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>74 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">284 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="border-button text-center">
            <a href="contests.php">Browse Open Contests</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pricing-plans">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Our Pricing</h6>
            <h4>Photography <em>Contest Plans</em> and Price <em>Awards</em></h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item">
            <img src="assets/images/pricing-01.jpg" alt="">
            <h4>Basic Plan</h4>
            <ul class="first-plan">
              <li>Lorem Ipsum Dolores Sonte</li>
              <li>Songe Lorem Ipsum Dol</li>
              <li>Matrios Venga Heptuss</li>
              <li>Denim Sriracha Kogi</li>
              <li>Digital Photography Awards</li>
            </ul>
            <span class="price">$25 USD</span>
            <div class="border-button">
              <a href="#">Choose This Plan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item">
            <img src="assets/images/pricing-02.jpg" alt="">
            <h4>Standard Plan</h4>
            <ul class="second-plan">
              <li>Lorem Ipsum Dolores Sonte</li>
              <li>Songe Lorem Ipsum Dol</li>
              <li>Matrios Venga Heptuss</li>
              <li>Denim Sriracha Kogi</li>
              <li>Digital Photography Awards</li>
            </ul>
            <span class="price">$45 USD</span>
            <div class="border-button">
              <a href="#">Choose This Plan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item">
            <img src="assets/images/pricing-03.jpg" alt="">
            <h4>Advanced Plan</h4>
            <ul class="third-plan">
              <li>Lorem Ipsum Dolores Sonte</li>
              <li>Songe Lorem Ipsum Dol</li>
              <li>Matrios Venga Heptuss</li>
              <li>Denim Sriracha Kogi</li>
              <li>Digital Photography Awards</li>
            </ul>
            <span class="price">$85 USD</span>
            <div class="border-button">
              <a href="#">Choose This Plan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2048 <a href="#">SnapX</a> Photo Contest Co., Ltd. All rights reserved. 
          
          Design: <a title="CSS Templates" rel="sponsored" href="https://templatemo.com/page/1" target="_blank">TemplateMo</a> Distribution: <a title="CSS Templatesss" rel="sponsored" href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</php>