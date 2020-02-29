<?php
include_once("controller.php");

if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>



<head>
    <meta charset="utf-8">

    <title>Book Shop(All User  Details)</title>
    <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
    <script src="Resourses/js/jquery-3.3.1.min.js"></script>
    <script src="Resourses/js/popper.min.js"></script>
    <script src="Resourses/js/bootstrap.min.js"></script>



    <style>
        body{

        }
        h1{
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        } 
        th {
            background-color: #588c7e;
            color: white;

        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>

<body>
    <!--navigation bar-->

<center><h1>All User Details</h1></center>
<a href="index.php" class="alert-link" style="font-size: 25px;">Going to home page</a>

<table>
    <h5>Customers</h5>
    <tr>
        <th>User Id</th> 
        <th>First Name</th> 
        <th>Last Name</th>
        <th>E mail</th>
        

    </tr>

   <?php
            $data = $obj->viewData("customer");
            foreach ($data as $row) {

                $id = $row["id"];
                $fn = $row["fname"];
                $ln = $row["lname"];
                $email = $row["email"];
                ?>
    
    <tr>
        
        <td><?php echo $id ?></td>
        <td><?php echo $fn ?></td>
        <td><?php echo $ln ?></td>
        <td><?php echo $email ?></td>
        
    </tr>
 <?php
            }
            ?>
</table>

<table>
    <h5>Authers</h5>
    <tr>
        <th>User Id</th> 
        <th>First Name</th> 
        <th>Last Name</th>
        <th>E mail</th>
        

    </tr>

   <?php
            $data2 = $obj->viewData("auther");
            foreach ($data2 as $row) {

                $id = $row["id"];
                $fn = $row["fname"];
                $ln = $row["lname"];
                $email = $row["email"];
                ?>
    
    <tr>
        
        <td><?php echo $id ?></td>
        <td><?php echo $fn ?></td>
        <td><?php echo $ln ?></td>
        <td><?php echo $email ?></td>
        
    </tr>
 <?php
            }
            ?>
</table>
</body>
</html>