<?php
	include('dbc.php');

	$id = $_POST['id'];
	
 	/**
	 * 
	 */
	class renewitem extends document
	{
		
		function updateitem($table,$id)
		{

			$id = $_POST['id'];
	$bookname = $_POST['bookname'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	

	$iname = $_FILES['image']['name'];
	$location = $_FILES['image']['tmp_name'];
	
	$path = "image/".$iname;
	
	$upload = move_uploaded_file($location,$path);
		
		$sql = "UPDATE item SET bookname='$bookname',author='$author',price='$price',image='$path' WHERE id = $id";
		$result = mysqli_query($this->connection(),$sql);

		if($result == 1){
			echo "<script>
				alert('updated');
				window.location = 'dashbord.php';

			</script>";
		}
		}
	}

	$ob = new renewitem;
	$ob->updateitem('item',$id);

?>