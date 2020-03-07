<?php

//GET ALL BOOKS
function getAllBooks($category, $con)
{
	$QUERY = "SELECT * FROM books WHERE category_name='$category'";
	$RESULT = mysqli_prepare($con, $QUERY);
	$OUTPUT = "";
	$i = 0;

	mysqli_stmt_bind_result($RESULT, $ID, $TITLE, $AUTHOR, $CATEGORY, $DESCRIPTION, $IMAGE, $PRICE, $DATE);
	mysqli_stmt_execute($RESULT);
	mysqli_stmt_store_result($RESULT);
	
	if(mysqli_stmt_num_rows($RESULT)>0)
	{
		while(mysqli_stmt_fetch($RESULT))
		{
			if($i==4 || $i==0)
			{
				$i++;
				$OUTPUT.='<div class="col-md-2">';
			}
			else
			{
				$i++;
				$OUTPUT.='<div class="col-md-2" style="margin-left:98px;">';
			}
			$OUTPUT .= '
			<div class="card card-default" style="width:250px; height:auto;">
			<div class="card-body">
			<center><a href="description.php?id='.$ID.'">
			<img src="AdminPanel/Scripts/BooksImage/'.$IMAGE.'" style="height:220px;" class="img-fluid" />
			</a>
			</center>
			</div>
			<div class="card-footer">
			<a href="description.php?id='.$ID.'">
			<p>'.$DESCRIPTION.'</p>
			</a>
			<p><i class="badge bg-success text-white" style="font-size:14px; font-style: normal;">4.2 <i class="fa fa-star"></i></i> (5,066)</p>
			<div class="row">
			<p style="font-weight: bold;" class="ml-3">₹'.$PRICE.'&nbsp;&nbsp;
			<p style="color:gray;"><strike>₹19,599</strike>&nbsp; 
			<span>33% off</span>
			</p>
			</p>
			</div>
			<p>No Cost EMI</p>
			</div>
			</div>
			</div>';
		}
	}
	else
	{
		$OUTPUT.="<center><div><h1 class='m-5'>No Results Available</h1></div></center>";
	}
	return $OUTPUT;
}

//GET BOOK DETAIL
function getBookDetail($id, $con)
{
	$QUERY = "SELECT * FROM books WHERE id = '$id'";
	$RESULT = mysqli_prepare($con, $QUERY);
	$OUTPUT = '';

	mysqli_stmt_bind_result($RESULT, $ID, $TITLE, $AUTHOR, $CATEGORY, $DESCRIPTION, $IMAGE, $PRICE, $DATE);
	mysqli_stmt_execute($RESULT);
	mysqli_stmt_store_result($RESULT);

	if(mysqli_stmt_num_rows($RESULT)>0)
	{
		while(mysqli_stmt_fetch($RESULT))
		{
			$OUTPUT.='
			<div class="row">
	        <div class="col-md-5">
	          <div class="card-body"><img src="AdminPanel/Scripts/BooksImage/'.$IMAGE.'" class="img-fluid"></div>
	          <div class="card-footer"><button class="btn btn-warning">Buy Now</button><button class="btn btn-warning" style="margin: 10% ">Rent Now</button></div>
	        </div>
	        <div class="col-md-7">
	          <h1>'.$TITLE.'</h1><br>
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
	              <p>'.$AUTHOR.'</p>
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
	        </div>';
		}
	}
	else
	{
		$OUTPUT.="<center><div><h1 class='m-5'>No Results Available</h1></div></center>";
	}
	return $OUTPUT;
}



?>