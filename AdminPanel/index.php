<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome Admin!</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>