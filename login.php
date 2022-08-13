<?php
session_start();
require "config.php";
if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $query = "select * from userTable where userName='$userName'";
    $sql = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($sql)) {
        $userName = $_POST['userName'];
        $userPass = $_POST['userPass'];
        if (($row['1'] == $userName && $row['2'] == $userPass && $row['6'] == 1 && $row['5'] == 1)) {
            $_SESSION["login"] = "1";
            $_SESSION['userId'] = $row[0];
            $_SESSION['userName'] = $row[1];
            $_SESSION['userEmail'] = $row[3];
            $_SESSION['userPhone'] = $row[4];
            if( $_SESSION['current_page']){
                header("Location: ". $_SESSION['current_page']);
                
            }else
            {
                header("Location:/admin/dashboard.php");
            }
            
        } elseif (($row['1'] == $userName && $row['2'] == $userPass && $row['6'] == 1 && $row['5'] == 2)) {
            $_SESSION["agent"] = "1";
            $_SESSION['userId'] = $row[0];
            $_SESSION['userName'] = $row[1];
            $_SESSION['userEmail'] = $row[3];
            $_SESSION['userPhone'] = $row[4];

            if( $_SESSION['current_page']){
                header("Location: ". $_SESSION['current_page']);
                
            }else
            {
                header("Location:/agent/dashboard.php");
            }
        } elseif (($row['1'] == $userName && $row['2'] == $userPass && $row['6'] == 1 && $row['5'] == 3)) {
            $_SESSION["user"] = "3";
            $_SESSION['userId'] = $row[0];
            $_SESSION['userName'] = $row[1];
            $_SESSION['userEmail'] = $row[3];
            $_SESSION['userPhone'] = $row[4];
            if( $_SESSION['current_page']){
                 header("Location: ". $_SESSION['current_page']);
                
            }else
            {
                header("Location:/passenger/index.php");
            }
            
        } elseif (($row['1'] == $userName && $row['2'] == $userPass && $row['6'] != 1 && $row['5'] == 1)) {
            echo "<center><h3 class='h3 text-danger'>Hello {$row[1]}, Your Account Is Deactivated. Please Contact Support.</h3></center>";
        } elseif (($row['1'] == $userName && $row['2'] == $userPass && $row['6'] != 1 && $row['5'] == 2)) {
            echo "<center><h3 class='h3 text-danger'>Hello {$row[1]}, Your Account Is Deactivated. Please Contact Support.</h3></center>";
        } elseif (($row['1'] == $userName && $row['2'] == $userPass && $row['6'] != 1 && $row['5'] == 3)) {
            echo "<center><h3 class='h3 text-danger'>Hello {$row[1]}, Your Account Is Deactivated. Please Contact Support.</h3></center>";
        } else {
            echo "<center><h3 class='h2 text-danger'>Enter your Username and passwod Correctly</h3></center>";
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--<link href="login_signup/login.css" rel="stylesheet">-->
    <link href="login.css" rel="stylesheet">
</head>

<body>
    <center>
        <div><button class=" mt-4 btn btn-primary" type="submit"><a href="index.php" class="text-light">Back To Home </a> </button></h1>
        </div>
    </center>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <h2 class="inactive underlineHover"> <a href="signup.php">Sign Up</a> </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="pictures/logo/logo1.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form   action="" name="myForm" method="post" enctype="multipart/form-data">
                <input type="text" id="login" class="fadeIn second" name="userName" placeholder="Enter your Username">
                <input type="password" id="password" class="fadeIn third" name="userPass" placeholder="Enter your Password" style=" background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;">
                <input type="submit" class="fadeIn fourth" value="Log In"  name="submit" value="Login" ">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>