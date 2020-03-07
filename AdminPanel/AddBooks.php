<!DOCTYPE html>
<html>
<head>
    <title>Add Books</title>
    <?php include("include/links.php"); ?>
</head>
<body>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <?php include("include/navbar.php"); ?>
       <?php include("include/sidebar.php"); ?>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <a href="AddBooks.php" class="btn btn-primary col-md-offset-1 animated fadeInLeftBig">Add Books</a>
                <a href="ViewBooksDetail.php" class="btn btn-info animated fadeInLeftBig">View</a>
                <div class="col-sm-10 col-md-10 well col-md-offset-1 animated fadeInLeftBig" id="content" style="position:relative; top:20px;">
                    <div>
                        <form method="post" enctype="multipart/form-data" id="addBookForm">
                              <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title">
                              </div>
                              <div class="form-group">
                                <label for="author">Author:</label>
                                <input type="text" class="form-control" name="author" id="author">
                              </div>
                              <div class="form-group">
                                <label for="author">Category:</label>
                                <select class="form-control" id="category" name="category">
                                    <option>--Select Category--</option>
                                    <option>Novels</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" class="form-control" name="price" id="price">
                              </div>
                              <div class="form-group">
                                <label for="bookImage">Image:</label>
                                <input type="file" class="form-control" name="bookImage" id="bookImage">
                              </div>
                              <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea type="text" class="form-control" name="description" id="description" placeholder="Description"></textarea>
                              </div>
                              <button type="submit" class="btn btn-default" id="addBookBtn">Add Book</button>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- JavaScript Libraries -->
  <?php include("js/JSLinks.php"); ?>
 
<script type="text/javascript" src="js/script.js"></script>
<script>
    $(document).ready(function(){

        $("#addBookBtn").on('click', function(e){

              e.preventDefault();

              var form = $("#addBookForm")[0];
              var formData = new FormData(form);

              $.ajax({

                  url:"Scripts/addBookScript.php",
                  method:"post",
                  cache: false,
                  contentType: false,
                  processData: false,
                  data:formData,
                  success:function(data)
                  {
                    alert(data);
                    form.reset();
                  }
                  
              });
        });
    })
</script>
</body>
</html>