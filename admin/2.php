<?php

include '../config.php';
if(isset($_POST['submit'] )){
    $dir='images/';

    $path=$dir.basename($_FILES['nid1']['name']);
    $tmp=$_FILES['nid1']['tmp_name'];
    $type=$_FILES['nid1']['type'];
    $size=$_FILES['nid1']['size'];
    $error=$_FILES['nid1']['error'];
    $t=move_uploaded_file($tmp, $path);
    
    $path1=$dir.basename($_FILES['picture']['name']);
    $tmp1=$_FILES['picture']['tmp_name'];
    $type1=$_FILES['picture']['type'];
    $size1=$_FILES['picture']['size'];
    $error1=$_FILES['picture']['error'];
    
    $t1=move_uploaded_file($tmp1, $path1);

$key = "AID-";
$year = date("Y");
$month = date("m");
$day = date("d");
$letter = chr(rand(65,90));

$ticket=rand(1000,9999);
$fnl=$key.$year.$month.$day.$letter.$ticket;
        
        
        $agentId =$fnl;
        $agentName = $_POST['agentName'];
        $phoneNo = $_POST['phoneNo'];
        $companyName = $_POST['companyName'];
        $nid = $_POST['nid'];
        $nidUpload = $path;
        $picture = $path1;
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $address1 = $_POST['address'];
        $address2 = $_POST['address2'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $district = $_POST['district'];
        $gender = $_POST['gender'];
        $agentStatus = $_POST['agentStatus'];


        $sql =" CALL insertAgentTable('$agentId','$agentName','$phoneNo','$companyName',$nid,'$nidUpload','$picture','$email','$password1','$address1','$address2','$country','$city','$zip','$district','$gender','$agentStatus');";
        $request = mysqli_query($conn, $sql);
        

        if($request){
            header("Location:add_agent.php");
        }else{
            echo "Failed: ". mysqli_error($conn);
        }

    }
?>
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title> Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <div class="container mt-3">
        <div class="text-center mb-4 mt-3">
            <h3>Add New Agent Accounts</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="POST" enctype="multipart/form-data" style="width: 30vh; min-width: 800px;">
                <div class="row">
                    
                    <div  class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="agentName" placeholder="Agent Name">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="phoneNo" placeholder="Phone No">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="companyName"  placeholder="Company Name">
                    </div>
                    <div class="mb-2 col-md-6" >
                        <input type="text" class="form-control" name="nid" placeholder="Nid">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="file" class="form-control" name="nid1" placeholder="Nid Upload">
                    </div>
                    <div class="mb-2">
                        <input type="file" class="form-control" name="picture"  placeholder="Picture">
                    </div>
                    <div class="mb-2 col-md-6" >
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    
                    <div class="mb-2">
                        <textarea name="address" placeholder="Address" id="" cols="105" rows="2"></textarea>
                        <!-- <input type="text" class="form-control" name="name"  placeholder=""> -->
                    </div>
                    <div  class="mb-2">
                        <textarea name="address2" placeholder="Address" id="" cols="105" rows="2"></textarea>
                        <!-- <input type="text" class="form-control" name="month" placeholder=""> -->
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="country" placeholder="Country">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="city"  placeholder="City">
                    </div>
                    <div  class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="zip" placeholder="Zip Code">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="district" placeholder="District">
                    </div>
                    <div  class="mb-2">
                        <label for="gender"><strong>Gender:</strong></label>
                        Male
                        <input type="radio" class="" name="gender" value="Male">
                        Female
                        <input type="radio" class="" name="gender" value="Female">
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" name="agentStatus" placeholder="Agent Status">
                    </div>
                    
                    
                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                        <br><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>