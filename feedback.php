
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Online Bookshop : Feedback</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/small-library.css" rel="stylesheet">

        <script>
            function ValidateEmail()
            {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
                {
                    return (true)
                }
                alert("You have entered an invalid email address")
                return (false)
            }

            function validateForm() {
                var x = document.forms["myForm"]["name"].value;
                if (x == "") {
                    alert("First Name must Want to be fill");
                    return false;
                }
                var y = document.forms["myForm"]["message"].value;
                if (y == "") {
                    alert("Last Name must Want to be fill");
                    return false;
                }

            }
        </script>

        <style>
            body {padding-top:20px;}
        </style>
    </head>

    <body style="background-color:#ccffcc;">
    <?php include_once("navBar.php"); ?>
    <br /> <br /><br /> <br />
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm" style="align-content: center;">
                        <form name="myForm" class="form-horizontal" action="controller.php" method="post">
                            <fieldset>
                                <legend class="text-center">You can give your feedback</legend>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Your message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group"s>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="Feedback" class="btn btn-primary btn-lg">Send</button><br />
                                      
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
