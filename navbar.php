    <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Books</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" id="search_form" action="books.php">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Title</label>
              <input type="text" class="form-control form-control-lg form-control-a" name="title" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Author</label>
              <input type="text" class="form-control form-control-lg form-control-a" name="author" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" name="types" id="Type">
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
      <a class="logo" href="index.php"><img src="img/logo.png" style="float: left; width: 150px; height: auto;"><span class="color-b"></span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>

         
          <li class="nav-item dropdown">
            <a  href="books.html" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Books
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="books.php?books=schools">Schools</a>
              <a class="dropdown-item" href="books.php?books=colleges">Colleges</a>
              <a class="dropdown-item" href="books.php?books=competitive">Competitive</a>
              <a class="dropdown-item" href="books.php?books=papers">Papers</a>
              <a class="dropdown-item" href="books.php?books=novels">Novels</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
           <li class="nav-item dropdown">
            <?php 
            $user = @$_SESSION['user_id'];
            $query = mysqli_query($con, "SELECT * FROM users WHERE email='$user'");
            $img = "";
            if(mysqli_num_rows($query))
            {
              while($row=mysqli_fetch_array($query))
              {
                $img = $row['profile_image'];
              }
            }

            if(isset($_SESSION['user_id'])){ ?>
            <a  style="cursor: pointer; color:#2eca6a;"  class="nav-link dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">My Account</a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown1" style="width:250px;">
              <center><img src="<?php echo $img; ?>" class="img-circle" style="width:100px; height: 100px;">
                <p class="mt-3" style="color:#2eca6a;"><?php echo $_SESSION['user_id']; ?></p>
              </center>
              <hr>
              <a class="dropdown-item" href="blog-single.html"><i class="fa fa-user-circle" style="font-size:18px;"></i>&nbsp; &nbsp; Profile</a>
              <hr>
              <a class="dropdown-item" href="blog-single.html"><i class="fa fa-shopping-cart" style="font-size:18px;"></i>&nbsp; &nbsp; My Orders</a>
              <hr>
              <a class="dropdown-item" href="blog-single.html"><i class="fa fa-cog" style="font-size:18px;"></i>&nbsp; &nbsp; Account Setting</a>
              <hr>
              <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" style="font-size:18px;"></i>&nbsp; &nbsp; Logout</a>
            </div>

          <?php } else{?>
            <a class="nav-link" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">My Account</a>
          <?php }?>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>

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
        <form method="post" action="registration_script.php" class="form-vertical" id="regform">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" id="password">
            </div>
            <div class="form-group">
              <input type="password" name="confirm-pass" class="form-control" placeholder="Confirm Password" id="confirmPass">
              <p class="text-danger" id="msg"></p>
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
  <!--/ Nav End /-->

  <!-- password matching -->
  <script type="text/javascript">
    $(document).ready(function(){
        $("#confirmPass").keyup(function(){
          if($("#password").val()!="")
          {
            if($(this).val()!=$("#password").val())
            {
              $("#msg").html("<p class='text-danger'>Password not matched</p>");
            }
            else
            {
              $("#msg").html("<p class='text-success'>Password matched</p>");
            }
          }
          else
          {
            $("#msg").html("");
          }
        });
    });
  </script>
