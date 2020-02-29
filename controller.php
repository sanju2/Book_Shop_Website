<?php

session_start();
include("db.php");

class controller extends db {

    //send email function

    function sendMail($email) {



        require 'PHPMailerAutoload.php';
        require 'credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL;
        $mail->Password = PASS;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom(EMAIL, 'Book Shop');
        $mail->addAddress($email);
        $mail->addReplyTo(EMAIL);


        $mail->AddEmbeddedImage('img/logo.png', 'logo');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "Wellcome to Book Shop";
        $mail->Body = '<div style="borger:2px solid red;">Thank You Connect with us<b></br>Book SHOP</b></div>';
        $mail->AltBody = "You are successfully registration for Book Shop";

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return FALSE;
            //header("location:index.php");
        } else {
            //header("location:s-register.php");
            echo 'Message has been sent';
            //header("Refresh:3; url=index.php");
            return TRUE;
            //header("location:index.php");
        }
    }

    function sendMail2($email) {



        require 'PHPMailerAutoload.php';
        require 'credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = EMAIL;
        $mail->Password = PASS;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom(EMAIL, 'Book Shop');
        $mail->addAddress($email);
        $mail->addReplyTo(EMAIL);


        $mail->AddEmbeddedImage('img/logo.png', 'logo');

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "You're feedback successfully received";
        $mail->Body = '<div style="borger:2px solid red;">Thank You Connect with us<b></br>Book Shop</b></div>';
        $mail->AltBody = "You're feedback successfully received";

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return FALSE;
            //header("location:index.php");
        } else {
            //header("location:s-register.php");
            echo 'Message has been sent';
            return TRUE;
            //header("Location:feedback.php");
        }
    }

    //login function
    function login($username, $password) {

        $res = mysqli_query($this->con, "select * from login where username='$username' and password='$password' ");
        $b = false;
        $st = null;
        while ($row = mysqli_fetch_array($res)) {
            $b = true;
            $ul = null;
            $st = $row["status"];
            $ul = $row["usertype"];
        }

        if ($b) {
            if ($st == "active") {
                $_SESSION["user"] = $username;
                if ($ul == "customer") {
                    header("location:book-select.php");
                } elseif ($ul == "admin") {
                    header("location:admin_page.php");
                } elseif ($ul == "Auther") {
                    header("location:auther_page.php");
                }
            } elseif ($st == "banned") {
                header("location:login.php?ut=banned");
            } else {
                header("location:login.php?ut=pending");
            }
        } else {
            header("location:login.php?ut=incorrect");
        }
    }

   
    //data save function

    function saveData($table, $data) {

        $query = "insert into $table values('" . implode("','", array_values($data)) . "')";
        $r = mysqli_query($this->con, $query);



        if ($r) {

            header("location:s-register.php");
        } else {
            echo "<script>
			alert('Eroor');
			window.location='login.html';
			</script>";
		
        }
    }

    function viewData($table) {
        $res = mysqli_query($this->con, "select * from $table");

        $arr = array();
        while ($row = mysqli_fetch_array($res)) {
            $arr[] = $row;
        }
        return $arr;
    }

   

}

$obj = new controller();

//customer registration
if (isset($_POST["Register"])) {

    $arr = array(0, $_POST["fname"], $_POST["lname"], $_POST["email"]);
    $obj->saveData("customer", $arr);



    $log = array($id, $_POST["uname"], $_POST["password"], "customer", "pending");
    $obj->saveData("login", $log);
    $obj->sendMail($_POST["email"]);
}


//Auther registration
if (isset($_POST["AutherRegister"])) {

    $arr = array(0, $_POST["fname"], $_POST["lname"], $_POST["email"]);
    $obj->saveData("auther", $arr);


    $log = array($id, $_POST["uname"], $_POST["password"], "Auther", "pending");
    $obj->saveData("login", $log);
    $obj->sendMail($_POST["email"]);
}

//Admin registration
if (isset($_POST["AdminRegister"])) {

    $arr = array(0, $_POST["fname"], $_POST["lname"], $_POST["email"]);
    $obj->saveData("admin", $arr);

    $log = array($id, $_POST["uname"], $_POST["password"], "admin", "pending");
    $obj->saveData("login", $log);
    $obj->sendMail($_POST["email"]);
}


if (isset($_POST["login"])) {

    $obj->login($_POST["username"], $_POST["password"]);
}

//Book register
if (isset($_POST["BookRegister"])) {

    $img = $_FILES["image"]["tmp_name"];
    $name = $_FILES["image"]["name"];
    $path = "Uploads/" . $name;
    if (move_uploaded_file($img, $path)) {
        $arr = array(0, $_POST["bookname"], $name, $_POST["price"], $path);
        $obj->saveData("book", $arr);
    }
}
//feedback save


if (isset($_POST["Feedback"])) {

    $arr = array(0, $_POST["name"], $_POST["email"], $_POST["message"]);
    $obj->saveData("feedback", $arr);
    $obj->sendMail2($_POST["email"]);
}

//Order Now 


if (isset($_POST["Pay"])) {

    $arr = array(0, $_POST["name"], $_POST["price"]);
    $obj->saveData("payment", $arr);
}

if (isset($_GET["act"])) {
    $obj->changeStatus($_GET["u"], $_GET["status"]);
}

//Cart Full order


if (isset($_POST["Pay2"])) {

    $arr = array(0, $_POST["name"], $_POST["price"], $_POST["total"]);
    $obj->saveData("cart", $arr);
}


?>
