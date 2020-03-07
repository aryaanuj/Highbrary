<?php
//database connection
include("../database/database_connection.php");

//insert books data in db
$QUERY = "INSERT INTO Books ( title, author, category_name, description, price, image, postDateTime ) VALUES ( ?, ?, ?, ?, ?, ?, ? ) ";
$RESULT = mysqli_prepare($con, $QUERY);

if($RESULT)
{
	mysqli_stmt_bind_param($RESULT, 'ssssiss', $TITLE, $AUTHOR, $CATEGORY, $DESCRIPTION, $PRICE, $IMAGE_NAME, $DATETIME);

	$TITLE = mysqli_real_escape_string( $con, $_POST['title'] );
	$AUTHOR = mysqli_real_escape_string( $con, $_POST['author'] );
	$CATEGORY = mysqli_real_escape_string( $con, $_POST['category'] );
	$DESCRIPTION = mysqli_real_escape_string( $con, $_POST['description'] );
	$PRICE = mysqli_real_escape_string( $con, $_POST['price'] );
	$IMAGE_NAME = mysqli_real_escape_string( $con, $_FILES['bookImage']['name']);
	$IMAGE_TEMP = $_FILES['bookImage']['tmp_name'];
	$DATETIME = date('Y-m-d H:i:s');

	if($TITLE!="" && $DESCRIPTION != "" && $PRICE!="" && $IMAGE_NAME!="" && $AUTHOR!="" && $CATEGORY!="")
	{
		$IMAGE_NAME = time().'_'.$IMAGE_NAME;

		if(move_uploaded_file($IMAGE_TEMP, "BooksImage/".basename($IMAGE_NAME)))
		{
			if(mysqli_stmt_execute($RESULT))
			{
				echo "Successfully Added";
			}
			else
			{
				echo mysqli_error($con);
			}
		} 
	}
	else
	{
		echo "All Fields are required";
	}
}

mysqli_stmt_close($RESULT);

?>