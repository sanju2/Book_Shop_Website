<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/small-library.css" rel="stylesheet">
        
       <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">



    </head>

    <body style="font-family: 'Acme', sans-serif;">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Bookshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="book_view.php">Our Books</a>
                        </li>

                        

                       
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>

                        <br />
                        <br />

                        &nbsp &nbsp &nbsp &nbsp
                        <li class="nav-item" style="color:white; font-size:20px;">

                            welcome : <?php
                            if (isset($_SESSION["user"])) {
                                echo $_SESSION["user"];
                            } else {
                                echo "User";
                            }
                            ?> &nbsp; 
                            <?php
                            if (isset($_SESSION["user"])) {
                                echo "<a href='Log-out.php'>Log Out</a>";
                            } else {
                                echo "<a href='login.php'>Login</a>||<a href='customer_register.php'>Register</a>";
                            }
                            ?>

                        </li>



                    </ul>
                </div>
            </div>
        </nav>



    </body>
</html>