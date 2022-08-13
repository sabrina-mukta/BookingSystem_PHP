<?php
include 'config.php';
      
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" 
    integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
<link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
  <body>
    
        
      



      <nav class=" navbar navbar-expand-lg bg-light shadow">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse " id="navbarSupportedContent">
            <div class="container_left">
                <a class="navbar-brand" href="index.php">
                  <img src="pictures/logo/logo1.png" alt="" width="60" height="60">
                </a>
              </div>
            <ul class=" nav-mid navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item ">
                <a class="nav-link font_bold " href="index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link font_bold" href="offer.php">Offer</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link font_bold" href="events.php">Events</a>
              </li>
              

            </ul>
            <?php 
            session_start();
            // $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
            if(!isset($_SESSION["user"])){

    	
?>

                <button class="btn btn-outline-secondary btn_c" type="submit"> <a style="text-decoration:none ;" href="login.php" class="text-light">Login/Sign UP</a></button><ul class="navbar-nav">
                <?php }else { ?>
               <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3 mt-2 ms-6">
                              <img src="admin/images/pic.jpg" class="rounded-circle mx-auto d-block" alt="Cinque Terre"  width="80" height="80"> <hr>
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
            <?php } ?>
            
            <form class="d-flex" role="search">
            
              <!--<button class="btn btn-outline-secondary btn_c" type="submit"><a style="text-decoration:none ;" href="cart.php" class="text-light">Cart</a> </button>-->
              
            </form>
          </div>
        </div>
      </nav>

      <div class="mt-3 slider">
      <marquee behavior="scroll" direction="left"
        onmouseover="this.stop();"
          onmouseout="this.start();">টিকিট কাটার জন্য আর কাউন্টারে নয় ! ঘরে বসে টিকিট কাটুন সহজে ও নিরাপদে । আমদের সাইট ভিজিট ও টিকিট ক্রয় করার জন্য অসংখ্য ধন্যবাদ</marquee>
        </div>

      <div class="container shadow p-3 mt-2 bg-transparent ">
        <form action="" id="search_data" method="post" class="d-flex justify-content-around">
           <strong style="font-size: 19px; font-family:Arial, Helvetica, sans-serif; color: rgb(3, 3, 139);"> Journey Date</strong>
          <input type="text" id="datepicker1" name="datepicker1">
          <strong style="font-size: 19px; font-family:Arial, Helvetica, sans-serif; color: rgb(3, 3, 139);">  From</strong>
          <div class="dropdown">
              
              
            <select class="form-select" aria-label="Default select example" name="fromSelect" id="fromSelect">
              <option selected>Select Your Area</option>
              <option value="Dhaka" name="dhaka">Dhaka</option>
              <option value="Borisal" name="borisal">Borisal</option>
              <option value="Khulna" name="khulna">Khulna</option>
           
              <option value="Chittagong" name="chittagong">Chittagong</option>
              <option value="Rajshahi" name="rajshahi">Rajshai</option>
             
              


            </select>
          </div>
          <strong style="font-size: 19px; font-family:Arial, Helvetica, sans-serif; color: rgb(3, 3, 139);"> To</strong>
          <div class="dropdown">
            <select class="form-select" aria-label="Default select example"  name="tilSelect" id="tilSelect">
              <option selected>Select Your Destination</option>
             <option value="Dhaka" name="dhaka">Dhaka</option>
              <option value="Borisal" name="borisal">Borisal</option>
              <option value="Khulna" name="khulna">Khulna</option>
           
              <option value="Chittagong" name="chittagong">Chittagong</option>
              <option value="Rajshahi" name="rajshahi">Rajshahi</option>


            </select>
          </div>
          <input type="button"  value="Search" id="showSearch" name="search" class="btn btn-success"/>
        </form>
        
        
        <!-- Search Result-->

        <!-- Search Result End-->
      </div>
      <div class="container shadow p-3 mt-2 bg-transparent " id="hideSearch">
          <center>
            <h2 class="mt-3" >All Details Are Here</h2>
          </center>
            
          <table class="table table-dark table-striped-columns">
            <tr>
              <th>Bus Name</th>
              <th>Time</th>
              <th>Rent</th>
              <!--<th>Date</th>-->
              <th>Details</th>
            </tr>
            <tbody id="myid">
                
            </tbody>
          </table>
<div id="buss"></div>
      </div>
      
      <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="false">
        
        <div class="carousel-indicators">
        
       
        
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
          
          <div class="carousel-item active">
        
            <img src="pictures/images/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Every Bus Condition is Perfect</h5>
              <p>Every Driver Drive Safely</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pictures/images/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hanif AC Bus Now Available</h5>
              <p>Try Our Service. We hope, You Satisfied</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pictures/images/5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Add New Bus On Chittagong Road</h5>
              <p>Buy Ticket From Us</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <div class="container mb-3 mt-5">
      <h2>RECOMANNDED HOLIDAYS</h2>
    </div>

    <div class=" container d-flex justify-content-evenly">

      <div class="col-md-4">           
          <img src="pictures/recomanded image/1.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
          <a class="btn btn-first"><b>730.00 TK </b></a>
          <a class="btn btn-secend"href="mailto:abuzargifari58@gmail.com/"></b>BUY TICKETS</b></a>
        </div>
        
          <div class="col-md-4">       
        <img src="pictures/recomanded image/2.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="304"> 
        <a class="btn btn-first"><b>650.00 TK </b></a>
        <a class="btn btn-secend"href="mailto:abuzargifari58@gmail.com/"></b>BUY TICKETS</b></a>
        </div>
        
          <div class="col-md-4">            
        <img src="pictures/recomanded image/3.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="304"> 
        
        <a class="btn btn-first"><b>800.00 TK </b></a>
         <a class="btn btn-secend"href="mailto:"></b>BUY TICKETS</b></a>
        </div>
  </div>

  
  <div class=" container d-flex justify-content-evenly">

    <div class="col-md-4">           
        <img src="pictures/recomanded image/4.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <a class="btn btn-first"><b>730.00 TK </b></a>
        <a class="btn btn-secend"href="mailto:abuzargifari58@gmail.com/"></b>BUY TICKETS</b></a>
      </div>
      
        <div class="col-md-4">       
      <img src="pictures/recomanded image/5.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="304"> 
      <a class="btn btn-first"><b>650.00 TK </b></a>
      <a class="btn btn-secend"href="mailto:abuzargifari58@gmail.com/"></b>BUY TICKETS</b></a>
      </div>
      
        <div class="col-md-4">            
      <img src="pictures/recomanded image/6.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="304"> 
      
      <a class="btn btn-first"><b>800.00 TK </b></a>
       <a class="btn btn-secend" href="mailto:"></b>BUY TICKETS</b></a>
      </div>
</div>
<div class="card text-center">
  <div style="color:rgb(40, 170, 0); font-size:30px; font-weight: 700; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="card-header">
    Buy Bus Tickets in 3 Easy Steps
  </div>
  <div class="card-body">
    <div class="container pt-4 pb-3">
      <div class="row col-12 mt-4">
        <div class="col-4 ">
          <div class="img-icon col-4">
            <img src="pictures/easy steps/1.png">
          </div>
          <div class="img-text col-8 ">
            <h2> Search </h2>
            <p class="text-left">
               Choose your origin, destination, journey dates and search for buses
            </p>
          </div>
         
        </div>
        <div class="col-4 ">
          <div class="img-icon col-4">
            <img src="pictures/easy steps/1.png">
          </div>
          <div class="img-text col-8 ">
            <h2> Select </h2>
            <p class="text-left">
              Select your desired trip and choose your seats
            </p>
          </div>
         
        </div>
        <div class="col-4 ">
          <div class="img-icon col-4">
            <img src="pictures/easy steps/1.png">
          </div>
          <div class="img-text col-8 ">
            <h2> Pay </h2>
            <p class="text-left">
              Pay by bank cards, mobile banking, or cash
            </p>
          </div>
         
        </div>
        
      </div>
    </div>


    <a href="#" class="btn btn-success">Try Now</a>
    </div>
  <div class="d-flex justify-content-around">
<div class="container row">
  <div class=" col-6">
    <div class="img-icon icon col-2">
      <img src="pictures/easy steps/4.png">
    </div>
<div class="rectangle col-10">
  <h2>Safe and Secure online payments</h2>

</div>
  </div>
  <div class="col-6">
    <div class="img-icon icon col-2">
      <img src="pictures/easy steps/5.png">
    </div>
<div class="rectangle col-10">
  <h2>Cash on Delivery available</h2>
</div>
  </div>
</div>
  </div>
  </div>
 


<div class="card text-center">
  <div style="color:rgb(40, 170, 0); font-size:20px; font-weight: 700; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
 <script src="admin/jquery/jquery.min.js"></script>
    <script src="admin/jquery/jquery-ui.js"></script>

    <script src="admin/js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js "></script>
 
    <script src="admin/js/jquery.dataTables.min.js "></script>
    <script src="admin/js/dataTables.bootstrap5.min.js "></script>
    <script src="admin/js/script.js "></script>
    
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
  </script>
<script>
  $(function() {
    $("#datepicker1").datepicker();
  } );
$(document).ready(function(){
   
      $("#hideSearch").hide();
  });

$("#showSearch").click(function(){
  $("#hideSearch").toggle();
});
$(document).ready(function(){
   
      $("#DetailsHide").hide();
  });

$("#DetailsShow").click(function(){
  $("#DetailsHide").toggle();
});
  
$(document).ready(function(){
    $('#showSearch').click(function(){
        var date=$('#datepicker1').val();
        var from=$('#fromSelect').val();
        var till=$('#tilSelect').val();
        $.ajax({
            url:'search_data.php',
            method:'POST',
            dataType:'html',
            data:{date:date,from:from,till:till},
            success:function(data){
                $('#myid').html(data);
            }
        })
        
    })
})

function cartDetails(id,idc){
 $.ajax({
     url:'cart.php',
     method:'POST',
     dataType:'html',
     data:{idc:idc},
     success:function(data){
         $('#buss').html(data);
     }
 })
}
  </script>
  </body>
</html>
