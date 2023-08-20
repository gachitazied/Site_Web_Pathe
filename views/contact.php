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


   
    <hr>


    <hr>
    <section class="contact-information padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-header">
              <h2 class="section-title">Info</h2>
            </div>
            <div class="contact-detail">
              <div class="detail-list">
                <p>Nos Articles | FAQ sont là pour vous aider. N'hésitez pas à les consulter pour trouver rapidement la réponse à votre question.</p>
                <ul class="list-unstyled list-icon">
                  <li>
                    <a href="#"><i class="icon icon-phone"></i>+216 75 000 980</a>
                  </li>
                  <li>
                    <a href="mailto:info@yourcompany.com"><i class="icon icon-mail"></i>cinema@cinema.com</a>
                  </li>
              
                </ul>
              </div>
  
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-information">
              <div class="section-header">
                <h2 class="section-title">Contact</h2>
              </div>

              <form name="contactform" action="Addcontact.php"  id="myForm" method="post" class="contact-form">
                <div class="form-item">

                  <input  type="text" id="nom" minlength="2" name="register-nom_contact" placeholder="Nom*" class="u-full-width bg-light" >
                  <span id="errorname"></span>

                  <input type="text" id="prenom" minlength="2" name="register-prenom_contact" placeholder="Prénom*" class="u-full-width bg-light" >
                  <span id="errorprenom"></span>

                  <input type="email" id="mail" name="register-email_contact" placeholder="E-mail*" class="u-full-width bg-light" >
                  <span id="erroremail"></span>
                  
                  <textarea class="u-full-width bg-light" id="mess" name="register-message_contact" placeholder="Message" style="height: 180px;" ></textarea>
                  <span id="errormessage"></span>
                </div>

                <button type="submit" name="submit" class="btn btn-dark btn-full btn-medium">Envoyer</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
   let myForm = document.getElementById('myForm');

myForm.addEventListener('submit', function(e) {
  let mynom = document.getElementById('nom');
  let myprenom = document.getElementById('prenom');
  let mymail = document.getElementById('mail');
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