<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Document</title>

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
    
    
<?php
	include('dbc.php');

    $errors = array();
    
    $bookname = "";
    $author = "";
    $price = "";


   if(isset($_POST['submit'])){
       
       $require = array("bookname","author","price");
       
       foreach($require as $field){
           
           if(empty(trim($_POST[$field]))){
            $errors[] = $field." required";
        }
           
       }
       
       
        $maxlen = array("bookname" => 100,"author" => 100,"price" => 100);
        
       
       foreach($maxlen as $field => $maxlen){
           
           if(strlen(trim($_POST[$field])) > $maxlen){
            $errors[] = $field." must be less than ".$maxlen." characters";
        }
           
       }
       
       

	$bookname = $_POST['bookname'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	

	$iname = $_FILES['image']['name'];
	$location = $_FILES['image']['tmp_name'];
	
	$path = "image/".$iname;
	
	$upload = move_uploaded_file($location,$path);

	$data = array($bookname,$author,$price,$path);
 	/**
	 * 
	 */
       
   
    
    if(empty($errors)){
	class addbook extends document
	{
		
		function additem($table,$info)
		{
            
		
		$sql = "INSERT INTO $table(bookname,author,price,image) VALUES ('".implode("','", array_values($info))."')";
		$result = mysqli_query($this->connection(),$sql);

            if($result == 1){
			echo "<script>
				alert('book added');
				window.location = 'dashbord.php';

			</script>";
		
		}
		
		}
		}
    
    
	$ob = new addbook;
	$ob->additem('item',$data);
    }
   }
    

?>

<div class="sidebar">
  <a class="" href="dashbord.php">dashbord</a>
  <a class="active" href="additem.php">addbook</a>
    <a class="" href="upload.php">pdfupload</a>
 
  <a href="Log-out.php">logout</a>
</div>

<div class="content">
 
<h2 style="margin-top:3%;text-align:center;">Add new books</h2>
<br>
<br>
    
    <?php 
    
    if(!empty($errors)){
        
        echo "<div class='alert alert-danger'>";
        echo "<b>there is errors in submiting</b>";
        echo "<br>";
        
        foreach ($errors as  $value) {
          echo "- ".$value."<br>";
        }
        echo "<br>";
        
        echo "</div>";
    }
    
    ?>

<form method="post" action="" enctype="multipart/form-data">

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Book name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputPassword"  name="bookname"  <?php echo 'value="'.$bookname.'"';?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">author </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="author" <?php echo 'value="'.$author.'"';?>>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Price </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="price" <?php echo 'value="'.$price.'"';?>>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Image </label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputPassword" name="image">
    </div>
  </div>

  <p align="center">
  <input type="submit" value="submit" class="btn btn-primary" onclick="return confirm('are you sure?')" name="submit">
  <input type="submit" value="clear" class="btn btn-danger" onclick="return confirm('are you sure?')">
</p>

</form>
</div>
	
</body>
</html>