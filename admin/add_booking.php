<?php
    session_start ();
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION["login"])){

    	header("location:../login.php"); 
    	
    
    }
include '../config.php';
    $id=$_GET['bookId'];


if(isset($_POST['submit'] )){
$key = "BID-";
$year = date("Y");
$month = date("m");
$day = date("d");
$letter = chr(rand(65,90));

$ticket=rand(1000,9999);

$fnl=$key.$year.$month.$day.$letter.$ticket;
        
        
        $bookingId =$fnl;
        $busId = $_POST['busId'];
        $bookingDate = $_POST['bookingDate'];
        $passengerName = $_POST['passengerName'];
        $routeId = $_POST['routeId'];
        $routeName = $_POST['routeName'];
        $totalSeatBooking = $_POST['totalSeatBooking'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        //$priceWithDiscount =myFunction();
        
        $seatNumber = $_POST['seatNumber'];
        $sellBy=$_SESSION['userId'];
        $sellYouserType="0";
        
        
        
        
        


        $sql1 = "INSERT INTO `seat`(`busId`, `$seatNumber`) VALUES ('$busId','1')";
        $request1 = mysqli_query($conn, $sql1);
        
        if(!$request1){
            $sql2 = "UPDATE `seat` SET  `$seatNumber`='1' WHERE `busId`='$busId'";
            $request2 = mysqli_query($conn, $sql1);
        }else{
            echo "Failed: ". mysqli_error($conn);
        }
        
        
        
        $sql = "INSERT INTO `bookingTable`(`bookingId`, `busId`, `bookingDate`, `passengerName`, `routeId`, `routeName`, `totalSeatBooking`, `price`, `discount`, `priceWithDiscount`, `seatNumber`,`sellBy`,`sellYouserType`) VALUES ('$bookingId','$busId','$bookingDate','$passengerName','$routeId','$routeName','$totalSeatBooking','$price','$discount','$priceWithDiscount','$seatNumber','$sellBy','$sellYouserType')";




        $request = mysqli_query($conn, $sql);
        

        if($request){
            header("Location:booking_list.php");
        }else{
            echo "Failed: ". mysqli_error($conn);
        }

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
        <a class="btn btn-primary p-1 m-1 text-white " href="bus_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">BUS</a>
        </center>
        <!-----------Bus End--------------->
        <center>
        <!-----------routs start--------------->
        
        <a class="btn btn-primary p-1 m-1 text-white " href="route_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">ROUTE</a>
        </center>

        <!-----------route End--------------->
        <!-----------Booking Start--------------->
         <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="booking_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Booking</a>
        </center>

       
        <!-----------Booking End--------------->
        
          <!-----------schedule Start--------------->
         <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="schedule_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Schedule </a>
        </center>

       
        <!-----------schedule  End--------------->
        <!-----------user Start--------------->
       <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="agent_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Agent</a>
        </center>
        <!-----------User End--------------->
        <!-----------refund Start--------------->
        <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="refund_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Refund</a>
        </center>
        <!-----------refund End--------------->
        <!-----------account Start--------------->
       <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="account_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Account</a>
        </center>
        <!-----------account  End--------------->
        <!-----------Counter Start--------------->
        <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="counter_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Counter</a>
        </center>
        <!-----------Counter End--------------->
        <!-----------Feedback Start--------------->
        <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="feedback_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Feedback</a>
        </center>
        <!-----------counter End--------------->
        <!-----------Passenger Start--------------->
        <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="passenger_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Passenger</a>
        </center>
        <!-----------Passenger  End--------------->
        <!-----------Discount Start--------------->
       <center>
        <a class="btn btn-primary p-1 m-1 text-white " href="discount_list.php" style="width:90%;" onmouseover="this.style.color='#00FF00'" onmouseout="this.style.color='#000'" role="button">Discount</a>
        </center>
        <!-----------Discount  End--------------->
    </div>
    </div>




    <!-- offcanvas -->

    <div class="container mt-5 pt-2">
         <div class="text-center spacer-t m-5">
            <h3>Booking Is Open</h3>
            <p class="text-muted">Complete the form below to Book you Seat and Date</p>
            <center><div class="mb-2 col-md-6">
                        <input type="datetime-local" class="form-control" name="bookingDate"  placeholder="Booking Date">
                    </div></center>
        </div>
        <div class="container d-flex justify-content-center">
        
            <form action="" method="post" style="width: 30vh; min-width: 800px;">
                <div class="row">
                    
                    <!--<div  class="mb-2 col-md-6">-->
                    <!--    <input type="text" class="form-control" name="bookingId" placeholder="Booking Id ">-->
                    <!--</div>-->
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="busId" id="busId" placeholder="Bus Id">
                    </div>
                    
                    <div  class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="passengerName" placeholder="Passenger Name">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="routeId" placeholder="Route Id">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="routeName"  placeholder="Route Name">
                    </div>
                    <div class="mb-2 col-md-6" >
                        <input type="text" class="form-control" name="totalSeatBooking" id="totalSeatBooking" placeholder="Total Seat Booking" onkeyup="myFunction()">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="price" id="price" placeholder="Price" onkeyup="myFunction()">
                    </div>
                    <div class="mb-2 col-md-6">
                        <input type="text" class="form-control" name="discount" id="discount"   placeholder="Discount" onkeyup="myFunction()">
                    </div>
                    <div class="mb-2 col-md-6" >
                        <input type="text" class="form-control" name="priceWithDiscount" disabled placeholder="Price With Discount">
                    </div>
                    <div class="mb-2 ">
                        <input type="text" class="form-control" name="seatNumber" id="seatNumber" placeholder="Seat Number">
                    </div>
                    
                    
                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                        <a href="view.php" class="btn btn-danger">Cancel</a>
                        <br><br>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="jquery/jquery.min.js"></script>
    <script src="jquery/jquery-ui.js"></script>

    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js "></script>
 
    <script src="js/jquery.dataTables.min.js "></script>
    <script src="js/dataTables.bootstrap5.min.js "></script>
    <script src="js/script.js "></script>
    <script type="text/javascript">
    
function myFunction() {
  var totalSeatBooking = document.getElementById("totalSeatBooking");
  var price = document.getElementById("price");
  var discount = document.getElementById("discount");
  var priceWithDiscount =parseFloat((totalSeatBooking*price)  - discount);
  return priceWithDiscount;
}
    
$(document).ready(function(){
   $("#busId").autocomplete({
       source: 'auto/autoSuggestbusId.php',
     }); 
})
$(document).ready(function(){
   $("#seatNumber").autocomplete({
       source: 'auto/autoSuggestSeat.php',
     }); 
})
  
  $(document).ready(function(){
   $("#routeId").autocomplete({
       source: 'auto/autoSuggestRoute.php',
     }); 
})
       

</script>
</body>

</html>