<?php
include_once("controller.php");

if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online BookShop : Book-select</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/small-library.css" rel="stylesheet">

        
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <style>


            html, body{
                height: 100%;
                width: 100%;
                font-family: 'Poppins', sans-serif;
                color:black;
                background-size:cover;

            }




        </style>

        
    </head>

    <body>
        <script>
            $(document).ready(function () {
                //alert('this is great');
                $('#search').keyup(function () {

                    var search = $('#search').val();
//            alert(search);

                    $.ajax({
                        url: 'search.php',
                        data: {search: search},
                        type: 'POST',
                        success: function (data) {

                            if (!data.error) {
                                $('#result').html(data);
                            }

                        }

                    });

                });


            });
        </script>


        <!--navigation bar-->
        <?php include_once("navBar.php"); ?>
        <br />
        <br />
        <div id="container" class="col-xs-6 col-xs-offset-3  ">

            <h2>Search Books</h2>

            <input type="text" name="search" id="search" class="form-control" placeholder="Search Our inventory"><br><br>

            <h2 class="bg-success" id="result"></h2>

        </div>
        <center>
        <button class="btn btn-warning"><a href="index2.php" class="text-dark">Downloads Books PDF</a></button>
        </center>
        <br />
        <br />
        <br />
        <!--car select code-->
        <div class="um" id="show">
            <?php
            $data = $obj->viewData("book");
            foreach ($data as $row) {

                $name = $row["name"];
                $image = $row["image"];
                $price = $row["price"];
                $path = $row["path"];
                ?>
                <form action="controller.php" method="post">
                    <div class="row" style="width: 50%; margin: 0 auto; margin-bottom: 40px;">
                        <div class="col-md-7" >
                            <img src="<?php echo $path; ?>" width="150px" height="210px">
                        </div>
                        <div class="col-md-5">

                            <h4>Book Name : <input type="text" name="name" value="<?php echo $name ?>"></h4>
                            <h4>Book Price : <input type="text" name="price" value="<?php echo $price ?>"></h4>


                            <!--<button type="button" value=""  class="btn btn-primary"><a href="pay.php">Order Now</a></button>-->
                            <button type="submit" value="Pay" name="Pay"  class="btn btn-primary">Book Now</button>
                        </div>
                        <div style="margin-top: 20px; width: 100%; height: 2px;"></div>
                    </div>
                </form>

                
                <?php
            }
            ?>

        </div>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    </body>
</html>
