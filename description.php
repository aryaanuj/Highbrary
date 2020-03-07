<?php
session_start();
include("database_connection.php");
include("MainScripts/BookScript.php");

$id = @$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Highbrary</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <?php include("navbar.php"); ?>

  <section style="width:100%; height: 150vh; margin-top:150px;">
    <div class="container">
      <!-- GET BOOK DETAIL -->
      <?php echo getBookDetail($id,$con); ?>
      </div>
    </section>
    <!--/ footer Star /-->
    <section class="section-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-2">
            <div class="widget-a">
              <div class="w-header-a">
                <h6>About</h6>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="contact.html">Contact Us</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="about.html">About Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-2">
            <div class="widget-a">
              <div class="w-header-a">
                <h6>Help</h6>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="payments.html">Payments</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="shipping.html">Shipping</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="cancellation.html">Cancellation & Returns</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="FAQ.html">FAQ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-2">
            <div class="widget-a">
              <div class="w-header-a">
                <h6>About</h6>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="return.html">Return Policy</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="term.html">Term Of Use</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="security.html">Security</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="privacy.html">Privacy</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="#">Sitemap</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-2">
            <div class="widget-a">
              <div class="w-header-a">
                <h6>SOCIAL</h6>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="#">E-mail</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="#">Facebook</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="#">Twitter</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="#">Instagram</a>
                    </li>
                    <li class="item-list-a" style="font-size: 13px">
                      <a href="#">Pintrest</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h6>Registered Office Address</h6>
                <p style="font-size: 13px">Flipkart Internet Private Limited,Buildings Alyssa, Begonia & Clove Embassy Tech Village,
                Outer Ring Road, Devarabeesanahalli Village, Bengaluru, 560103,Karnataka, India</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="list-inline-item">
                  <a href="about.html">About</a>
                </li>
                <li class="list-inline-item">
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">Highbrary</span> All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script>
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
    </script>

  </body>
  </html>
