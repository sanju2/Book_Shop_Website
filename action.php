<?php
	include('dbc.php');

	$bookname = $_POST['bookname'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	$image = $_POST['image'];

	$iname = $_FILES['image']['name'];
	$location = $_FILES['image']['tmp_name'];
	
	$path = "image/".$iname;
	
	$upload = move_uploaded_file($location,$path);

	$data = array($bookname,$author,$price,$path);
 	/**
	 * 
	 */
	class addbook extends document
	{
		
		function additem($table,$info)
		{
		
		$sql = "INSERT INTO $table(bookname,author,price,image) VALUES ('".implode("','", array_values($info))."')";
		$result = mysqli_query($this->connection(),$sql);

		if($result == 1){
			echo "<script>
				alert('book add');
				window.location = 'additem.html';

			</script>";
		}
		}
	}

	$ob = new addbook;
	$ob->additem('item',$data);

?>