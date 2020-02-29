
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>

<?php include("controller.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online BookShop : Payment page</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/small-library.css" rel="stylesheet">
      



    </head>

    <body>


        <!--navigation bar-->
        <?php include_once("navBar.php"); ?>



        <br />
        <br />
        <br />
        <!--car select code-->
        <div class="um" id="show">
            <?php
            $data = $obj->viewData("books");
            foreach ($data as $row) {

                $img = $row["bookname"];
                $bookno = $row["bookno"];
                $bookn = $row["bookname"];
                $isbm = $row["isbmno"];
                $auther = $row["auther"];
                $pages = $row["pages"];
                $price = $row["price"];
                ?>
                <div class="row" style="width: 50%; margin: 0 auto; margin-bottom: 40px;">
                    <form action="controller.php" method="post">
                        <input type="text" name="bookname" value="<?php echo $bookno; ?>"><br />
                         <input type="text" name="price" value="<?php echo $price; ?>"><br />
                         
                          <button type="button" value=""  class="btn btn-success" name="btn">Pay Now</button>
                    </form>
                    
                    
                </div>
                <?php
            }
            ?>

        </div>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    </body>
</html>
