<?php
	include('dbc.php');

	$id = $_GET['id'];

	/**
	 * 
	 */
	class deleteitem extends document
	{
		
		function removeitem($table,$id)
		{
		
		$sql = "DELETE FROM $table where id = '$id' LIMIT 1";	
		$result = mysqli_query($this->connection(),$sql);

		if($result == 1){
			echo "<script>
				alert('deleted');
				window.location = 'dashbord.php';

			</script>";
		}
		}
	}

	$ob = new deleteitem;
	$ob->removeitem('item',$id);

?>