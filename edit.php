<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		
		img{
			width: 15%;
		}
	</style>
</head>
<body>
<?php
	include('dbc.php');

	$id = $_GET['id'];


 	/**
	 * 
	 */
	class viewbook extends document
	{
		
		function viewitem($table,$id)
		{
		
		$sql = "SELECT id,bookname,author,price,image FROM item WHERE id = $id";
		$result = mysqli_query($this->connection(),$sql);

		while($row = mysqli_fetch_array($result)){
			$id = $row['id'];
			$bookname = $row['bookname'];
			$author = $row['author'];
			$price = $row['price'];
			$image = $row['image'];
		}

		

		echo	"<form method='post' action='action1.php' enctype='multipart/form-data'>";

		 echo "<input type='hidden'  class='form-control' id='inputPassword' value='$id' name='id' required>";

  		echo "<div class='form-group row'>";
    echo "<label for='staticEmail' class='col-sm-2 col-form-label'>Book name</label>";
    echo "<div class='col-sm-10'>";
      echo "<input type='text'  class='form-control' id='inputPassword' value='$bookname' name='bookname' required>";
    echo "</div>";
  echo "</div>";

  echo "<div class='form-group row'>";
    echo "<label for='staticEmail' class='col-sm-2 col-form-label'>Author</label>";
    echo "<div class='col-sm-10'>";
      echo "<input type='text'  class='form-control' id='inputPassword' value='$author' name='author' required>";
    echo "</div>";
  echo "</div>";

  echo "<div class='form-group row'>";
    echo "<label for='staticEmail' class='col-sm-2 col-form-label'>Price</label>";
    echo "<div class='col-sm-10'>";
      echo "<input type='text'  class='form-control' id='inputPassword'  value='$price' name='price' required>";
    echo "</div>";
  echo "</div>";

  echo "<div class='form-group row'>";
    echo "<label for='staticEmail' class='col-sm-2 col-form-label'>Image</label>";
    echo "<div class='col-sm-10'>";
      echo "<img src='$image'>";
    echo "</div>";
  echo "</div>";

  echo "<div class='form-group row'>";
    echo "<label for='staticEmail' class='col-sm-2 col-form-label'>New Image</label>";
    echo "<div class='col-sm-10'>";
      echo "<input type='file'  class='form-control' id='inputPassword' value='$image' name='image'>";
    echo "</div>";
  echo "</div>";

  echo "<p align='center'>";
  echo "<input type='submit' value='submit' class='btn btn-primary' onclick='return confirm('are you sure?')'>";
  echo "<input type='submit' value='clear' class='btn btn-danger' onclick='return confirm('are you sure?')'>";
echo "</p>";

echo "</form>";

		}
	}



	$ob = new viewbook;
	$ob->viewitem('item',$id);


?>




		
</body>
</html>