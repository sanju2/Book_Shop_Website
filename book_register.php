<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Online Bookshop : Book Register</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/all.css" rel="stylesheet">

        <!--java script form validation-->
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["fname"].value;
                if (x == "") {
                    alert("First Name must Want to be fill");
                    return false;
                }
                var y = document.forms["myForm"]["lname"].value;
                if (y == "") {
                    alert("Last Name must Want to be fill");
                    return false;
                }
                var r = document.forms["myForm"]["uname"].value;
                if (r == "") {
                    alert("Username must Want to be fill");
                    return false;
                }
                var p = document.forms["myForm"]["password"].value;
                if (p == "") {
                    alert("Password must Want to be fill");
                    return false;
                }
            }
            function ValidateEmail()
            {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
                {
                    return (true)
                }
                alert("You have entered an invalid email address")
                return (false)
            }
            

        </script>

    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Book Register Page</div>
                <div class="card-body">
                    <form name="myForm" action="controller.php" method="post" enctype="multipart/form-data" >
                        
                        <div class="form-group">
                           
                            <div class="form-label-group">
                                        <input type="text" class="form-control" placeholder="Book Name" name="bookname" required="required">
                                        <label for="bookName">Book Name</label>
                            </div>
                            <div class="form-label-group">
                                <input type="file" class="form-control" placeholder="Upload Book Picture" name="image" required="required">
                                <label for="bookImage">Book Image</label>
                            </div>
                            <div class="form-label-group">
                                        <input type="text" name="price" id="inputPrice" class="form-control" placeholder="Price" required="required">
                                        <label for="inputPrice">Price</label>
                            </div>
                        </div>

                        
                       
                         <input type="submit" class="btn btn-primary btn-block"  value="BookRegister" name="BookRegister">

                    </form>
                    <div class="text-center">
                      <!--back page eka dnna-->  <a class="d-block small" href="index.php">Back to Home Page</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>

</html>
