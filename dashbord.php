<?php 

	$conn = mysqli_connect("localhost","root","","bookshop");

	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

img{
	width: 15%;
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
  <a class="active" href="dashbord.php">dashboard</a>
  <a class="" href="additem.php">addbook</a>
    <a class="" href="upload.php">pdfupload</a>
 
  <a href="Log-out.php">logout</a>
</div>

	<div class="content"> 

		<table class="table">
  <thead>
    <tr>
      <th scope="col">Book name</th>
      <th scope="col">image</th>
      <th scope="col">view</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>

  	<?php 

  		$sql = "SELECT * FROM item";
  		$result = mysqli_query($conn,$sql);

  		while($row = mysqli_fetch_array($result)){
  			$id = $row['id'];
  			$bookname = $row['bookname'];
  			$image = $row['image'];



  			echo " <tr>";

     
      echo "<td>$bookname</td>";
      echo "<td><img src='$image'></td>";
      echo "<td><a role='button' class='btn btn-primary' href='edit.php?id=$id'>edit</a></td>";
       echo "<td><a role='button' class='btn btn-danger' href='delete.php?id=$id'>delete</a></td>";
    echo "</tr>";

  		}
  	?>

   
   
  </tbody>
</table>

	</div>

</body>
</html>