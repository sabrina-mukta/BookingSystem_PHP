<?php
    include '../config.php';
    session_start ();
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION["agent"])){
    
    	header("location:../login.php"); 
    
    }

    $id=$_GET['bookId'];


        
        if(isset($_POST['submit'])){
            $bookingId=$id;
            $busId = $_POST['busId'];
            $passengerName = $_POST['passengerName'];
            $routeId = $_POST['routeId'];
            $routeName = $_POST['routeName'];
            $totalSeatBooking = $_POST['totalSeatBooking'];
            $price = $_POST['price'];
            $discount = $_POST['discount'];
            $priceWithDiscount = $_POST['priceWithDiscount'];
            $seatNumber = $_POST['seatNumber'];
        
$sql1="UPDATE `bookingTable` SET `busId`='$busId',`passengerName`='$passengerName',`routeId`='$routeId',`routeName`='$routeName',`totalSeatBooking`='$totalSeatBooking',`price`='$price',`discount`='$discount',`priceWithDiscount`='$priceWithDiscount',`seatNumber`='$seatNumber' WHERE `bookingId`='$bookingId'";

            // $sql = "UPDATE `bookingTable` SET `passengerName`='$passengerName',`routeId`='$routeId',`routeName`='$routeName',`totalSeatBooking`='$totalSeatBooking',`price`='$price',`discount`='$discount',`priceWithDiscount`='$priceWithDiscount',`seatNumber`='$seatNumber' WHERE `bookingId`='$bookingId',";

            $query= mysqli_query($conn,$sql1);
            
            if($query){
                header("Location:booking_list1.php"); 
            }else{
                echo "Data is not updated";
            } 
                              
        }else{
                                
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        
          
.card {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}
.card:hover {
    text-decoration: none;
    color: #f1f1f1;
     transform:scale(1.1);
}
.card:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card p {
    font-size: 15px;
}
.card .icon i{
    font-size:40px;
    margin-right:10px;
}
.card .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: black;
}
.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}
.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}
.btn {
box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #63b8ee 5%, #468ccf 100%);
	background-color:#599bb3;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.btn:hover {
  background: #e08ddf;
  background-image: -webkit-linear-gradient(top, #e08ddf, #e08ddf);
  background-image: -moz-linear-gradient(top, #e08ddf, #e08ddf);
  background-image: -ms-linear-gradient(top, #e08ddf, #e08ddf);
  background-image: -o-linear-gradient(top, #e08ddf, #e08ddf);
  background-image: linear-gradient(to bottom,#e08ddf, #3498db);
  text-decoration: none;
  transform: rotateX(5deg);
  box-shadow: 0 15px 15px #f05db3;
}
.btn:active {
	position:relative;
	top:1px;
}
a.container{
 
    font-size:30px;
    text-decoration:none;
}
    </style>
  
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Booking System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" 
    integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    
</head>

<body style="background-color:#E0FFFF">
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Bus management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary me-4" type="submit">
              <i class="bi bi-search search"></i>
            </button>
                    </div>
                </form>
                
            <!-- copy from here-->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3 mt-2 ms-6">
                              <img src="images/pic.jpg" class="rounded-circle mx-auto d-block" alt="Cinque Terre"  width="80" height="80"> <hr>
                            <p class="h6 text-dark">ID:<?php echo $_SESSION['userId']; ?></p><hr>
                            <h6 class="h6 text-dark" me-2>Name:<?php echo $_SESSION['userName']; ?></h6><hr>
                            <h6 class="h6 text-dark">Email:<?php echo $_SESSION['userEmail']; ?></h6><hr>
                            <h6 class="h6 text-dark">Phone:<?php echo $_SESSION['userPhone']; ?></h6><hr>
                            <li class="" style="text-align:center">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                 <a  href="logout.php" class="text-decoration-none">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                 <!-- copy till here-->
                
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav  text-dark " id="sidebar" style="background-color:#fff">
        <div class="offcanvas-body p-1 flex-grow-0 ">
            <center>

                <a class="btn mt-1  text-light" href="dashboard.php" role="button" aria-expanded="false" aria-controls="collapseExample" style="width:90%;">Dashboard</a>
            </center>
        
        

        <!-----------Bus start--------------->
        <center>
        <a class="btn  bg-primary  p-1 m-1 text-white" href="bus_list1.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">BUS</a>
        </center>
        <!-----------Bus End--------------->
        
        <!-----------routs start--------------->
        <center>
        <a class="btn bg-primary p-1 m-1 text-white " href="route_list1.php" style="width:90%; background-color:#00FFFF" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">ROUTE</a>
        </center>

        <!-----------route End--------------->
        <!-----------Booking Start--------------->
         <center>
        <a class="btn bg-primary p-1 m-1 text-white " href="booking_list1.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Booking</a>
        </center>

       
        <!-----------Booking End--------------->
        <!-----------schedule Start--------------->
         <center>
        <a class="btn bg-primary p-1 m-1 text-white " href="" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Schedule </a>
        </center>

       
        <!-----------schedule  End--------------->
       
        
        
        <!-----------Counter Start--------------->
        <center>
        <a class="btn bg-primary p-1 m-1 text-white " href="counter_list1.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Counter</a>
        </center>
        <!-----------Counter End--------------->
        
        <!-----------Passenger Start--------------->
        <center>
        <a class="btn bg-primary p-1 m-1 text-white " href="passenger_list1.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Passenger</a>
        </center>
        <!-----------Passenger  End--------------->
       
    </div>
    </div>


    <!-- offcanvas -->

    <div class="container mt-5 pt-2">
         <div class="text-center spacer-t m-5">
            <h3>Booking Is Open</h3>
            <p class="text-muted">Complete the form below to Book you Seat and Date</p>
        </div>
        <div class="container d-flex justify-content-center">
        
            <form action="" method="post" style="width: 30vh; min-width: 800px;">
                <div class="row">
                    <?php
                          
                        $id=$_GET['bookId'];
                        $sql="SELECT * FROM `bookingTable` WHERE bookingId='$id'";
                        $query= mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($query)){
                        
                    ?>
                    
                    <div  class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="bookingId" placeholder="Booking Id " disabled value="<?php echo $row[0];?>">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="busId" placeholder="Bus Id" value="<?php echo $row[1];?>">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="datetime" class="form-control" name="bookingDate"  disabled  placeholder="Booking Date" value="<?php echo $row[2];?>">
                    </div>
                    <div  class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="passengerName" placeholder="Passenger Name" value="<?php echo $row[3];?>">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="routeId" placeholder="Route Id" value="<?php echo $row[4];?>">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="routeName"  placeholder="Route Name" value="<?php echo $row[5];?>">
                    </div>
                    <div class="mb-2 col-md-6" >
                        <input type="text" class="form-control" name="totalSeatBooking" placeholder="Total Seat Booking"value="<?php echo $row[6];?>">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $row[7];?>">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="discount"  placeholder="Discount" value="<?php echo $row[8];?>">
                    </div>
                    <div class="mb-2 col-md-6" >
                        <input type="text" class="form-control" name="priceWithDiscount" placeholder="Price With Discount" value="<?php echo $row[9];?>">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="seatNumber" placeholder="Seat Number" value="<?php echo $row[10];?>">
                    </div>
                    
                    
                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                        <a href="booking_list1.php" class="btn btn-danger">Cancel</a>
                        <br><br>
                    </div>
                    <?php } ;?>
                </div>
            </form>
        </div>
    </div>





    <script src="./js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js "></script>
    <script src="./js/jquery-3.5.1.js "></script>
    <script src="./js/jquery.dataTables.min.js "></script>
    <script src="./js/dataTables.bootstrap5.min.js "></script>
    <script src="./js/script.js "></script>
</body>

</html>