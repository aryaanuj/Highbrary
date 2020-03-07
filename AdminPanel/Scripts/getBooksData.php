<?php 

include("../database/database_connection.php");

//fetch books detail
$QUERY = "SELECT * FROM books";
$RESULT = mysqli_prepare($con, $QUERY);

mysqli_stmt_bind_result($RESULT, $ID, $TITLE, $AUTHOR, $CATEGORY, $DESCRIPTION, $IMAGE, $PRICE, $DATE);

mysqli_stmt_execute($RESULT);

while(mysqli_stmt_fetch($RESULT))
{
	echo "<tr>
			<td>".$TITLE."</td>
			<td>".$AUTHOR."</td>
			<td>".$CATEGORY."</td>
			<td>".$DESCRIPTION."</td>
			<td> <img src='Scripts/BooksImage/".$IMAGE."' class='img-fluid' width='100' height='50'/></td>
			<td>".$PRICE."</td>
			<td>".$DATE."</td>
			<td><a href='' class='btn btn-sm btn-primary'><i class='fa fa-edit'></i> Edit</a></td>
			<td><a href='' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i> Delete</a></td>
		 </tr>";
}














?>