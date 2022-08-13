<?php
    require "config.php";
    if (isset($_POST['submit'])) {
        
        $key = "PID-";
        $letter = chr(rand(65,90));
        $ticket=rand(100,999);
        $fnl=$key.$letter.$ticket;
        
        $passengerId = $fnl;
        $firstName = $_POST['firstName'];
        // $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];
        $emailAddress = $_POST['emailAddress'];
        $password1 = $_POST['password1'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $presentAddress = $_POST['presentAddress'];
        $permanentAddress = $_POST['permanentAddress'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $zipCode = $_POST['zipCode'];
        $status ='1';
        
        $sql = "INSERT INTO `passengerTable`(`passengerId`, `firstName`, `lastName`, `phone`, `emailAddress`, `password1`, `dateOfBirth`, `presentAddress`, `permanentAddress`, `country`, `city`, `zipCode`, `status`) VALUES ('$passengerId','$firstName','$lastName','$phone','$emailAddress','$password1','$dateOfBirth','$presentAddress','$permanentAddress','$country','$city','$zipCode','$status')";
        
        $request = mysqli_query($conn, $sql);
        
        $sql1 ="INSERT INTO userTable(userId, userName, userPassword, userEmail, userPhone, userTypeId, userStatus) VALUES ('$passengerId','$firstName','$password1','$emailAddress','$phone','3','1')";
             $request1 = mysqli_query($conn, $sql1);
             
            if($request){
                header("Location:login.php");
            }else{
                echo "Failed".mysqli_error($conn);
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
    <link href="search page/style1.css" rel="stylesheet">
</head>
  <body class="bg mt-5">
    <div class="container1" style="height: 55px;
    
    color: aliceblue;">


  
   
    
    </div>
    
    <div class="  container d-flex justify-content-center">

       
       <div class=""  style="background-color: #fff; min-width: 900px; padding: 10px;">

       <center>
        
            <h2 class="mt-2" >Please Fill The Form</h2>
        
        <form class="mt-5" action="" method="post" style="width: 30vh; min-width: 800px ;">
        
            <div class="row mt-5">
               
               
                <div class="mb-2 col-md-6">
                    <input type="text" class="form-control" name="firstName" placeholder="First Name">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="text" class="form-control" name="presentAddress" placeholder="Present Address">
                </div>
                
                <!--<div class="mb-2 col-md-6">-->
                <!--    <input type="text" class="form-control" name="middleName"  placeholder="Middle Name">-->
                <!--</div>-->
              
                <div class="mb-2 col-md-6">
                    <input type="text" class="form-control" name="permanentAddress" placeholder="Permanent Address">
                </div>
                
                <div class="mb-2 col-md-6">
                    <input type="password" class="form-control" name="password1"  placeholder="password">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="text" class="form-control" name="country" placeholder="Your Country">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="number" class="form-control" name="phone" placeholder="Phone">
                </div>
                
                <div class="mb-2 col-md-6">
                    <input type="text" class="form-control" name="city" placeholder="Your City">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="email" class="form-control" name="emailAddress" placeholder="Email Address">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="number" class="form-control" name="zipCode" placeholder="Zip Code">
                </div>
                <div class="mb-2 col-md-6">
                    <input type="date" class="form-control" name="dateOfBirth">
                </div>
                <!--<div class="mb-2 col-md-6">-->
                <!--    <input type="text" class="form-control" name="status" placeholder="Status">-->
                <!--</div>-->
                <div class=" mt-4 " style="width:310px; margin-left: auto;" >
                    <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                    <a href="login.php" class="btn btn-danger">CANCEL</a>
                    <!--<button type="submit" name="submit" class="btn btn-danger">CANCEL</button>-->
                    <button class="  btn btn-success" type="submit"><a style="text-decoration:none ;" href="index.php" class="text-light">Back To Home </a> </button></h1>
                    
                    <br><br>
                </div>
               
               
              
            </div>
        </form>
    </center>
       </div>
        
    </div>
    
</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>