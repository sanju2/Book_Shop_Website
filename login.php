<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BookShop - Login</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/all.css" rel="stylesheet">

        <!--javascript form validation-->
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["username"].value;
                if (x == "") {
                    alert("Name must want to be fill");
                    return false;
                }
                var y = document.forms["myForm"]["password"].value;
                if (y == "") {
                    alert("Password must want to be fill");
                    return false;
                }
            }
        </script>

    </head>

    <body class="bg-dark">


        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header"><center>Login Here</div></center>
                <div class="card-body">
                    <form name="myForm" action="controller.php" method="post">
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                                <label for="inputEmail">User Name</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary btn-block"  onclick="myFunction()" name="login" value="Login">
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="customer_register.php">Register an Account</a>
                        <a class="d-block small" href="forgetpass.php">Password reset</a>
                        <a class="d-block small" href="index.php">Back to Home Page</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <?php
        if (isset($_GET["ut"])) {
            ?>
            <?php
            if ($_GET["ut"] == "incorrect") {
                echo" <script> function myFunction() { alert('You Used Incorrect Details'); } </script> ";
            } elseif ($_GET["ut"] == "banned") {
                echo" <script> function myFunction() { alert('Your Account is banned'); } </script> ";
            } else {
                echo" <script> function myFunction() { alert('Your Account is Under reviewning'); } </script> ";
            }
            ?>
            <?php
        }
        ?>

    </body>

</html>
