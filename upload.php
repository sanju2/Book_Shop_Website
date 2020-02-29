<?php
include('inc/db.php');

    if(isset($_POST['submit'])){
        
    

     $doc_name = $_POST['doc_name'];

    $name = $_FILES['myfile']['name'];
    $tmp_name = $_FILES['myfile']['tmp_name'];
	
    $location = "documents/$name";
    move_uploaded_file($tmp_name,$location);

    $data = array($doc_name,$location);


	class uploadbook extends document
	{
		
		function uploaditem($table,$info)
		{

   
		
		$sql = "INSERT INTO $table(name,path) VALUES ('".implode("','", array_values($info))."')";
		$result = mysqli_query($this->connection(),$sql);


		if($result == 1){
			echo "<script>
				alert('updated');
				window.location = 'dashbord.php';

			</script>";
		}
		}
	}

    $ob = new uploadbook;
    $ob->uploaditem('documents',$data);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Upload Document</title>
    
    <style>
    
    body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    
    </style>
</head>
<body>
    
    <div class="sidebar">
  <a class="" href="dashbord.php">dashboard</a>
  <a class="" href="additem.php">addbook</a>
    <a class="active" href="upload.php">pdfupload</a>
 
  <a href="Log-out.php">logout</a>
</div>

    <div class="content">
    <form action = "#" method="post" enctype = "multipart/form-data"  style="margin-left:30%;margin-top:20%">

        <lable>Document Name</lable>
        <Input type="text" name = "doc_name"></Input><br>
        <br>
        <Input type="file" name = "myfile"></Input><br>
        <br>
        <Input type="submit" name = "submit" value ="upload" class="btn btn-primary">
        

    </form>
            
        
    </div>
                                                          
</body>
</html>