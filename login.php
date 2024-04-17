<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:Firstlogin.php");
    exit;
}
$login = false;
$showError = false;
$user = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include ('partials/_dbconnect.php');

    if ($user == "patient") {
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];

        $sql = "SELECT * FROM `patient` WHERE pid = '$pid' and pname = '$pname';";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            $_SESSION['pname'] = $pname;
            $_SESSION['pid'] = $pid;
            header("location:patient_index.php");
        } else {
            $showError = "Invalid Crendentials";
        }
    }
    if ($user == "doctor") {
        $did = $_POST['did'];
        $dname = $_POST['dname'];
        
        $sql = "SELECT * FROM `doctor` WHERE did = '$did' and dname = '$dname';";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            $_SESSION['dname'] = $dname;
            $_SESSION['did'] = $did;
            header("location:doctor_index.php");
        } else {
            $showError = "Invalid Crendentials";
        }
    }
    if ($user == "admin") {
        $name = $_POST['name'];
        $password = $_POST['password'];

        if ($name == 'admin' && $password == 'admin123') {
            $login = true;
            header("location:index.php");
        } else {
            $showError = "Invalid Crendentials";
        }
    }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            color: #6a6f8c;
            /* background: #c8c8c8; */
            font: 600 16px/18px 'Open Sans', sans-serif;
            background: url(https://source.unsplash.com/1920x1080/?doctor) no-repeat center;
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        .clearfix:after,
        .clearfix:before {
            content: '';
            display: table
        }

        .clearfix:after {
            clear: both;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .login-wrap {
            width: 100%;
            margin: auto;
            max-width: 550px;
            min-height: 650px;
            position: relative;
            background: url(https://source.unsplash.com/550x650/?doctor) no-repeat center;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
            margin-top: 10px;
        }

        .login-html {
            width: 100%;
            height: 100%;
            position: absolute;
            padding: 90px 70px 50px 70px;
            background: rgba(40, 57, 101, .9);
        }

        .login-html .sign-in-htm,
        .login-html .sign-up-htm {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            transition: all .4s linear;
        }

        .login-html .sign-in,
        .login-html .sign-up,
        .login-form .group .check {
            display: none;
        }

        .login-html .tab,
        .login-form .group .label,
        .login-form .group .button {
            text-transform: uppercase;
        }

        .login-html .tab {
            font-size: 22px;
            margin-right: 15px;
            padding-bottom: 5px;
            margin: 0 15px 10px 0;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }

        .login-html .sign-in:checked+.tab,
        .login-html .sign-up:checked+.tab {
            color: #fff;
            border-color: #1161ee;
        }

        .login-form {
            min-height: 345px;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        .login-form .group {
            margin-bottom: 15px;
        }

        .login-form .group .label,
        .login-form .group .input,
        .login-form .group .button {
            width: 100%;
            color: #fff;
            display: block;
        }

        .login-form .group .input,
        .login-form .group .button {
            border: none;
            padding: 15px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, .1);
        }

        .login-form .group input[data-type="password"] {
            text-security: circle;
            -webkit-text-security: circle;
        }

        .login-form .group .label {
            color: #aaa;
            font-size: 12px;
        }

        .login-form .group .button {
            background: #1161ee;
        }

        .login-form .group label .icon {
            width: 15px;
            height: 15px;
            border-radius: 2px;
            position: relative;
            display: inline-block;
            background: rgba(255, 255, 255, .1);
        }

        .login-form .group label .icon:before,
        .login-form .group label .icon:after {
            content: '';
            width: 10px;
            height: 2px;
            background: #fff;
            position: absolute;
            transition: all .2s ease-in-out 0s;
        }

        .login-form .group label .icon:before {
            left: 3px;
            width: 5px;
            bottom: 6px;
            transform: scale(0) rotate(0);
        }

        .login-form .group label .icon:after {
            top: 6px;
            right: 0;
            transform: scale(0) rotate(0);
        }

        .login-form .group .check:checked+label {
            color: #fff;
        }

        .login-form .group .check:checked+label .icon {
            background: #1161ee;
        }

        .login-form .group .check:checked+label .icon:before {
            transform: scale(1) rotate(45deg);
        }

        .login-form .group .check:checked+label .icon:after {
            transform: scale(1) rotate(-45deg);
        }

        .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
            transform: rotate(0);
        }

        .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
            transform: rotate(0);
        }

        .hr {
            height: 2px;
            margin: 60px 0 50px 0;
            background: rgba(255, 255, 255, .2);
        }

        .foot-lnk {
            text-align: center;
        }
    </style>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
if ($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You have logined successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
if ($showError) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> ' . $showError . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}

?>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="#" method="post">

                        <!--for Doctor login-->
                        <?php
                        if ($user == "doctor") {
                            echo "<div class='group'>
                            <label for='user' class='label'>Doctor-Id</label>
                            <input id='user' type='text' class='input' name='did'>
                        </div>  
                        <div class='group'>
                        <label for='user' class='label'>Doctor Name</label>
                        <input id='user' type='text' class='input' name='dname'>
                    </div>
                ";
                        }
                        ?>
                        <!--for Patient login-->
                        <?php
                        if ($user == "patient") {
                            echo "<div class='group'>
                                <label for='user' class='label'>Patient-Id</label>
                                <input id='user' type='text' class='input' name='pid'>
                            </div>  
                            <div class='group'>
                            <label for='user' class='label'>Patient Name</label>
                            <input id='user' type='text' class='input' name='pname'>
                        </div>
                    ";
                        }
                        ?>
                        <?php
                        if ($user == "admin") {
                            echo "<div class='group'>
                        <label for='pass' class='label'>Name</label>
                        <input id='pass' type='text' class='input' name='name'>
                    </div>
                    <div class='group'>
                        <label for='pass' class='label'>Password</label>
                        <input id='pass' type='password' class='input' data-type='password' name='password'>
                    </div>
                ";
                        }
                        ?>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>

                        <div class="hr"></div>
                    </form>
                </div>
                <div class="sign-up-htm">
                    <?php
                    if ($user == "patient") {
                        echo "<div class='group'>
                                <label for='user' class='label'>Patient-Id</label>
                                <input id='user' type='text' class='input' name='npid'>
                            </div>  
                            <div class='group'>
                            <label for='user' class='label'>Patient Name</label>
                            <input id='user' type='text' class='input' name='npname'>
                        </div>
                    ";
                    }
                    ?>
                    <?php
                    if ($user == "doctor") {
                        echo "<div class='group'>
                            <label for='user' class='label'>Doctor-Id</label>
                            <input id='user' type='text' class='input' name='ndid'>
                        </div>  
                        <div class='group'>
                        <label for='user' class='label'>Doctor Name</label>
                        <input id='user' type='text' class='input' name='ndname'>
                    </div>
                ";
                    }
                    ?>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>