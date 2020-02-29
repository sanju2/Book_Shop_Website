<?php

include_once("controller.php");

$connect = mysqli_connect("localhost", "root", "", "bookshop");
if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }
}
?>  

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Online Bookshop</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/small-library.css" rel="stylesheet">

        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->





    </head>

    <body>


        <!--navigation bar-->
        <?php include_once("navBar.php"); ?>


        <!-- Page Content -->
        <div class="container">

            <!-- Heading Row -->
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/indexmiddlle.jpg" alt="">
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Online Book Shop</h1>
                    <p>Bookshop, the main outlet of which is known as Godage Book Emporium in a partnership business engaged in printing, publishing, stocking, distributing and the sale of books including children’s books, school books, academic and literary works translation, books on art and crafts and the reprinting of classics of Sri Lanka. The Godage Book Emporium is located in a four storeyed building in Maradana, Colombo10. which houses the company’s administrative and publishing divisions as well.

                    </p>
                    <div class="dropdown">
                        <button class="btn btn-sucess dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register Here
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="customer_register.php">Customer Register</a>
                            <a class="dropdown-item" href="auther_register.php">Auther Register</a>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <!-- Call to Action Well -->
            <div >
                <div class="card-body">


                    <div class="row align-items-center my-5">
                        <div class="col-lg-7">
                            <!-- Start WOWSlider.com BODY section -->
                            <div id="wowslider-container1">
                                <div class="ws_images"><ul>
                                        <li><img src="data1/images/amazing_price.jpg" alt="Amazing_Price" title="Amazing_Price" id="wows1_0"/></li>
                                        <li><img src="data1/images/different_range_books.jpg" alt="Different_Range_Books" title="Different_Range_Books" id="wows1_1"/></li>
                                        <li><a href="http://wowslider.net"><img src="data1/images/e_book_available.jpg" alt="bootstrap slideshow" title="E_Book_Available" id="wows1_2"/></a></li>
                                        <li><img src="data1/images/you_can_pay_online.jpg" alt="You_Can_Pay_Online" title="You_Can_Pay_Online" id="wows1_3"/></li>
                                    </ul></div>
                                <div class="ws_bullets"><div>
                                        <a href="#" title="Amazing_Price"><span><img src="data1/tooltips/amazing_price.jpg" alt="Amazing_Price"/>1</span></a>
                                        <a href="#" title="Different_Range_Books"><span><img src="data1/tooltips/different_range_books.jpg" alt="Different_Range_Books"/>2</span></a>
                                        <a href="#" title="E_Book_Available"><span><img src="data1/tooltips/e_book_available.jpg" alt="E_Book_Available"/>3</span></a>
                                        <a href="#" title="You_Can_Pay_Online"><span><img src="data1/tooltips/you_can_pay_online.jpg" alt="You_Can_Pay_Online"/>4</span></a>
                                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript image slider</a> by WOWSlider.com v8.8</div>
                                <div class="ws_shadow"></div>
                            </div>	
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-5">
                            <div class="jumbotron">
                                <h1 class="display-4">Hello Admins!</h1>
                                <p class="lead">Admin Register page</p>
                                <hr class="my-4">
                                <p>Bookshop, the main outlet of which is known as Godage Book Emporium in a partnership business engaged in printing, publishing, stocking, distributing and the sale of books including children’s books, school books, academic and literary works translation, books on art and crafts and the reprinting of classics of Sri Lanka. The Godage Book Emporium is located in a four storeyed building in Maradana, Colombo10. which houses the company’s administrative and publishing divisions as well.</p>
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="admin_register.php" role="button">Admin Register here</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>


                    <br />
                    <br />
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->

                </div>
            </div>




            <!-- umee shopping cart-->
            <br />  
            <div class="container" style="width:700px;">  
                <h3 align="center">Our Books</h3><br />  
                <?php
                $query = "SELECT * FROM book ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>  
                        <div class="col-md-4">  
                            <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                    <img src="<?php echo $row["path"]; ?>" class="img-responsive" style="width: 100px;height: 150px;" /><br />  
                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                                    <h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>  
                                    <input type="text" name="quantity" class="form-control" value="1" />  
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                                </div>  
                            </form>  
                            <br />
                            <br />
                        </div>  
                        <?php
                    }
                }
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                    <table class="table table-bordered">  
                        <tr>  
                            <th width="40%">Item Name</th>  
                            <th width="10%">Quantity</th>  
                            <th width="20%">Price</th>  
                            <th width="15%">Total</th>  
                            <th width="5%">Action</th>  
                        </tr>  
                        <?php
                        if (!empty($_SESSION["shopping_cart"])) {
                            $total = 0;
                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                                ?> 
                                <form action="controller.php">
                                <tr>  
                                   
                                    <input type="text"  name="name" value="<?php echo $values["item_name"]; ?>">
                                    
                                    <td ><?php echo $values["item_quantity"]; ?></td>  
                                    <input type="text"  name="price" value="<?php echo $values["item_price"]; ?>">
                                    <td>Rs <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                    <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                                </tr>  
                                <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }
                            ?> 

                            <tr>  
                                <td colspan="3" align="right">Total</td>  
                                <td name="total" align="right">Rs <?php echo number_format($total, 2); ?></td>  
                                <button type="submit" value="Pay2" name="Pay"  class="btn btn-primary">Book Now</button>
                            </tr>  
                            </form> 
                            <?php
                        }
                        ?>  
                    </table>  
                </div>  
            </div>  
            <br />  

            <!-- Footer -->
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Online BookShop 2020</p>
                </div>
                <!-- /.container -->
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    </body>

</html>
