<?php
session_start();
include("database_connection.php");
$id = @$_GET['id'];

echo "<script>alert('".$id."'); </script>";
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
      <div class="row">
        <div class="col-md-5">
          <div class="card-body"><img src="img/8.jpg" class="img-fluid"></div>
          <div class="card-footer"><button class="btn btn-warning">Buy Now</button><button class="btn btn-warning" style="margin: 10% ">Rent Now</button></div>
        </div>
        <div class="col-md-7">
          <h1>Think And Grow Rich</h1><br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-2"><h6>Delivery</h6></div>
              <div class="col-md-10">
                <form action="" >
                  <div class="form-group" ><i style="margin: 1%; color: blue" class="fa fa-map-marker" aria-hidden="true">
                    </i><input style=" border:none; border-bottom: 2px solid blue" type="text" name="" pattern="[0-9]{4}" maxlength="4" placeholder="Enter delivery pincode"><button style="border: none; background-color:white; border-bottom: 2px solid blue; color: blue">Check</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="container-fluid" style="margin-top: 5%">
            <div class="row">
              <div class="col-md-2"><h6>Author</h6></div>
              <div class="col-md-10">
                <p>Napoleon Hill</p>
              </div>
            </div>
          </div>
          <div class="container-fluid" style="margin-top: 2%">
            <div class="row">
              <div class="col-md-2" style="margin-top: 3%"><h6>Highlights</h6></div>
              <div class="col-md-10">
                <p>
                  <li>Language:English</li>
                  <li>Binding:Paperback</li>
                  <li>Publisher: Fingerprint! Publishing</li>
                  <li>Genre: Activity Books</li>
                  <li>Edition:2019</li>
                </p>
              </div>
            </div>
          </div>
          <div class="container-fluid" style="margin-top: 2%">
            <div class="row">
              <div class="col-md-2"><h6>Library</h6></div>
              <div class="col-md-10">
                <button style="border: none; background-color:white; color: blue">Concept Library</button>
                <p><li>Rent Policy<button type="button" data-toggle="popover" data-placement="bottom" data-content="<table border=1><tr><td>Home</td></tr></table>" style="border: none; background-color: white"><i class="fa fa-question-circle-o" style="margin: 1%" aria-hidden="true"></i></button></li></p>
              </div>
            </div>
          </div>
          <hr>
          <div class="specification">
            <h3>Specifications</h3>
            <h5 style="margin-top: 8%; margin-left: 2%; font-weight: normal">Book Details</h5>
              <div class="container" style="margin-top: 4%">
                <div class="row">
                  <div class="col-md-4"><p style="font-weight: none; margin-left: 4%">Publication Year</p></div>
                  <div class="col-md-8"><b><p>2019</p></b>
                </div>
              </div>
              <h5 style="margin-top: 3%; font-weight: normal">Contributor</h5>
              <div class="container" style="margin-top: 4%">
                <div class="row">
                  <div class="col-md-4"><p style="font-weight: none">Authored By</p></div>
                  <div class="col-md-8"><b><p>Napoleon Hill</p></b></div>
                </div>
              </div>
              <button style="border: none; background-color:white; color: blue; margin-top: 2%">Read More</button>
        </div><hr>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9"><h3>Ratings and Reviews</h3></div>
            <div class="col-md-3"><button>Rate Product</button></div>
          </div>
        </div><hr>
        <p style="margin-left: 10%">Safe and Secure Payments.Easy Returns.100% Authentic products.</p>
      </div>
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
