<?php 
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

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
    <main class="mt-5 pt-3 ">
    <h2 class="container g-0">Booking List</h2>
        <div class="container-fluid tab">
        <div style="overflow-x: auto;">
            <a href="add_booking.php" class="btn btn-dark mb-2">ADD NEW</a>
    <table class="table table-bordered" id="bookingList">
    <thead class="table-info">
      <tr class="text-center">
        <th>Booking Id</th>
        <th>Bus id</th>
        <th>Booking date</th>
        <th>Passenger Name</th>
        <th>Route ID</th>
        <th>Route Name</th>
        <th>Total Seat booking</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Price with discount</th>
        <th>Seat Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class ="table table-border">
    <?php 
        include '../config.php';
        $sql = "SELECT * FROM `bookingTable`";      //Show all Table Value CMD....... 
        $request = mysqli_query($conn, $sql);  // Database connection + Data Showing.........
        // $x=1;
                    
        while($row = mysqli_fetch_array($request)){ 
    ?>
    <tr>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[5];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[7];?></td>
        <td><?php echo $row[8];?></td>
        <td><?php echo $row[9];?></td>
        <td><?php echo $row[10];?></td>
        <td><?php echo $row[9];?></td>
        <td><?php echo $row[15];?></td>
        <td class="form-control text-center bg-light">
            <a href="delete_booking.php?bookingId=<?php echo $row[0];?>"><i class="bi bi-trash text-danger"></i></a>
            <a href="update_booking.php?bookId=<?php echo $row[0];?>"><i class="bi bi-pen text-info"></i></a>
            

    </div>
        </td>
    </tr>
    <?php } ?>
    </tbody>
    
    
</table>
</div>
</div>
</main>

 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js "></script>
    <script src="js/jquery-3.5.1.js "></script>
    <script src="js/jquery.dataTables.min.js "></script>
    <script src="js/dataTables.bootstrap5.min.js "></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/script.js "></script>
    <script >
        $(document).ready( function () {
            $('#bookingList').DataTable();
        } );
    </script>
    
</body>

</html>