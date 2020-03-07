<?php
session_start();
include("database_connection.php");
include("MainScripts/BookScript.php");
$books = @$_GET['books'];
$title = @$_GET['title'];
$author = @$_GET['author'];
$types = @$_GET['types'];

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>

<body>

 <?php include("navbar.php"); ?>
<!--Books Section -->
<section style="height:200vh; width:100%;">
  <div class="col-md-12 container-fluid" style="position:relative; top:120px;">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-default" style="box-shadow: 3px 5px lightgray; height:auto;">
          <div class="card-header bg-white"><b>Filters</b></div>
         <div class="card-body">
           <h5>Categories</h5>
           <ul>
           <h6 style="margin-left: -15%">Books</h6>
            <a href="" style="color: black; text-decoration: none"><li>School</li></a>
            <a href="" style="color: black; text-decoration: none"><li>College</li></a>
            <a href="" style="color: black; text-decoration: none"><li>Competitive</li></a>
            <a href="" style="color: black; text-decoration: none"><li>Papers</li></a>
            <a href="" style="color: black; text-decoration: none"><li>Novels</li></a>
            <a href="" style="color: black; text-decoration: none"><li>Blogs</li></a>
            </ul><hr>
            <h6>CUSTOMER RATINGS</h6>
            <input type="checkbox" name="4star" value=""> 4 <i  style="font-size: 12px" class="fa fa-star" aria-hidden="true"></i> & above<br>
            <input type="checkbox" name="3star" value=""> 3 <i class="fa fa-star" aria-hidden="true"></i> & above<br>
            <input type="checkbox" name="2star" value=""> 2 <i class="fa fa-star" aria-hidden="true"></i> & above<br>
            <input type="checkbox" name="1star" value=""> 1 <i class="fa fa-star" aria-hidden="true"></i> & above<br><hr>
           
         </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <!-- GET ALL BOOKS -->
          <?php echo getAllBooks($books, $con); ?>
        </div>
      </div>
      
      <div class="col-md-12">
      <div class="row">
      <div class="col-md-3">
        <div class="card card-default" style="box-shadow: 3px 5px lightgray; height:auto;">
          <div class="card-body">
             <h6>LANGUAGE</h6>
            <i class="fa fa-search" aria-hidden="true"></i><input style=" border:none; margin-left: 3px; border-bottom: 2px solid grey" type="text" name="" placeholder="Search Language"><br>
            <input type="checkbox" name="hindi" value=""> Hindi <br>
            <input type="checkbox" name="english" value=""> English <br>
            <input type="checkbox" name="french" value=""> French <br>
            <input type="checkbox" name="german" value=""> German <br>
            <input type="checkbox" name="canada" value=""> Canada <br>
            <a href="" ><button style="border: none; background-color:white; color: blue">57 MORE</button></a><hr>
            <h6>BINDING</h6>
            <input type="checkbox" name="paperback" value=""> Paperback <br>
            <input type="checkbox" name="hardcover" value=""> Hardcover <br>
            <input type="checkbox" name="boardbook" value=""> Boardbook <br><hr>
            <h6>LATEST ARRIVALS</h6>
            <input type="checkbox" name="l30" value=""> Last 30 days <br>
            <input type="checkbox" name="l90" value=""> Last 90 days <br>
            <input type="checkbox" name="l150" value=""> Last 150 days <br><hr>
            <h6>AGE GROUP</h6>
            <input type="checkbox" name="y0" value=""> 0 - 2 Years <br>
            <input type="checkbox" name="y2" value=""> 2 - 5 Years <br>
            <input type="checkbox" name="y5" value=""> 5 - 9 Years <br>
            <input type="checkbox" name="y9" value=""> 9 - 12 Years <br>
            <input type="checkbox" name="teens" value=""> Teens <br>
          </div>
        </div>
      </div>
    </div>
     </div>
        </div>
      </div>
</section>



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
  </html>
