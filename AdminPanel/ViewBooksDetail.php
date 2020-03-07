<?php include("database/database_connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>View Books</title>
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
		<div class="container" style="position:relative;top:40px;">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Books Detail</h3></div>
					<div class="panel-body">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>Title</th>
									<th>Author</th>
									<th>Category</th>
									<th>Description</th>
									<th>Image</th>
									<th>Price</th>
									<th>Date</th>
									<th>#</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody id="booksData">
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("js/JSLinks.php"); ?>
	<script type="text/javascript">

	 //data table
	 $(document).ready(function() {
	 	$('#example').DataTable();
	 });

	 $(document).ready(function(e) {

	 		$.ajax({

	 			url:"Scripts/getBooksData.php",
	 			method:"post",
	 			success:function(data)
	 			{
	 				$("#booksData").html(data);
	 			}
	 		});
	 });

	</script>


</body>
</html>