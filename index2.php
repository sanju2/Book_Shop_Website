<?php

include("controller.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-library.css" rel="stylesheet">
</head>

<body style="background-color: #e6e6e6;">

    <?php
    echo "<center><h3> <b>You can download pdf</b></h3></center> ";


    $file = $obj->viewData("documents");
    foreach ($file as $row) {

        $id = $row['id'];
        $name = $row['name'];
        $path = $row['path'];

        
    ?>
        <center>
        <div class="card" style="width: 18rem;">
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $id ?></li>
                <li class="list-group-item"><?php echo $name ?></li>
                <li class="list-group-item"><?php echo "<a href='download.php?dow=$path'>Download</a>"; ?></li> <br />
            </ul>
        </div></center><br /> <br />
    <?php
    }
    ?>


</body>

</html>