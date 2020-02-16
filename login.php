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

<body><div class="click-closed"></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registration Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form method="post" class="form-vertical">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" name="confirm-pass" class="form-control" placeholder="Confirm Password" >
            </div>
            <div class="form-group">
              <input type="submit" name="register" value="Register Now" class="btn btn-primary form-control">
            </div>
        </form>
      <hr>
        <p style="color:black;">Already Registered? <a href="login.php" class="text-info">Login Here</a></p>
      </div>
    </div>

  </div>
</div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Books</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Title</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Author</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>Schools</option>
                <option>College</option>
                <option>Competitive</option>
                <option>Papers</option>
                <option>Novels</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Books</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Highbrary<span class="color-b"></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">My Account</a>
          </li>
          <li class="nav-item dropdown">
            <a  href="books.html" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Books
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="books.html">Schools</a>
              <a class="dropdown-item" href="blog-single.html">Colleges</a>
              <a class="dropdown-item" href="agents-grid.html">Competitive</a>
              <a class="dropdown-item" href="agent-single.html">Papers</a>
              <a class="dropdown-item" href="agent-single.html">Novels</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->


  <!--/login start /-->
  <section class="return" style="height: 70vh; margin-top: 10%;">
    <div class="container" style="margin-left: 20%">
      <div class="row">
        <div class="col-md-4" style="background-color: #26a356; height: 70vh;">
        <h1 style="margin-top: 5%; color: white; padding: 10px">Login</h1>
        <p style="margin-top: 8%; font-size: 25px; color: white; padding: 10px">Get access to your Orders, Wishlist and Recommendations</p>
      </div>
      <div class="col-md-6">
          <form action="index.php" method="post" style="margin-top: 10%">
  <div class="form-group">
    <input type="email" class="form-control" style="border:none; border-bottom: 1px solid green" placeholder="Enter Email" name="email" id="email">
  </div>
  <div class="form-group">
    <input type="Enter Password" name="password" class="form-control" style="border:none; border-bottom:1px solid green " placeholder="Enter password" id="pwd" >
  </div>
  <button type="submit" class="btn" name="login" style="background-color: teal; width: 100%;">Login</button>
  <p style="text-align: center; margin-top: 1%"> OR</p>
  <button type="submit" class="btn" style=" width: 100%;">Forgot Password?</button>
</form>
    <div class="sign" style="margin-top: 30%; text-align: center">
      <a data-toggle="modal" data-target="#myModal" style="cursor: pointer;" class="text-primary">New to Highbrary ? Create an account</a>
    </div>
      </div>
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
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Highbrary
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

</body>
</html>
