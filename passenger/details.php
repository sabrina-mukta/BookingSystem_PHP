<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Cabin|Indie+Flower|Inknut+Antiqua|Lora|Ravi+Prakash" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
  <link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 

<script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
  <title>Ticket Download</title>
<style>
 * {
  box-sizing: border-box;
  margin:0;
  padding:0;
}
body {
  background:#DDD;
  font-family: 'Inknut Antiqua', serif;
  font-family: 'Ravi Prakash', cursive;
  font-family: 'Lora', serif;
  font-family: 'Indie Flower', cursive;
  font-family: 'Cabin', sans-serif;
}
div.container {
  max-width: 1350px;
  margin: 0 auto;
  overflow: hidden
}
.upcomming {
  font-size: 45px;
  text-transform: uppercase;
  border-left: 14px solid rgba(255, 235, 59, 0.78);
  padding-left: 12px;
  margin: 18px 8px;
}
.container .item {
  width: 48%;
  float: left;
  padding: 0 20px;
  background: #fff;
  overflow: hidden;
  margin: 10px
}
.container .item-right, .container .item-left {
  float: left;
  padding: 5px 
}
.container .item-right {
  padding: 150px 10px;
  margin-right: 20px;
  width: 25%;
  position: relative;
  height: 286px
}
.container .item-right .up-border, .container .item-right .down-border {
    padding: 14px 15px;
    background-color: #ddd;
    border-radius: 50%;
    position: absolute
}
.container .item-right .up-border {
  top: -8px;
  right: -35px;
}
.container .item-right .down-border {
  bottom: -13px;
  right: -35px;
}
.container .item-right .num {
  font-size: 20px;
  text-align: center;
  color: #111
}
.container .item-right .day, .container .item-left .event {
  color: #555;
  font-size: 20px;
  margin-bottom: 9px;
}
.container .item-right .day {
  text-align: center;
  font-size: 25px;
}
.container .item-left {
  width: 71%;
  padding: 34px 0px 19px 46px;
  border-left: 3px dotted #999;
} 
.container .item-left .title {
  color: #111;
  font-size: 34px;
  margin-bottom: 12px
}
.container .item-left .sce {
  margin-top: 5px;
  display: block
}
.container .item-left .sce .icon, .container .item-left .sce p,
.container .item-left .loc .icon, .container .item-left .loc p{
    float: left;
    word-spacing: 5px;
    letter-spacing: 1px;
    color: #888;
    margin-bottom: 10px;
}
.container .item-left .sce .icon, .container .item-left .loc .icon {
  margin-right: 10px;
  font-size: 20px;
  color: #666
}
.container .item-left .loc {display: block}
.fix {clear: both}
.container .item .tickets, .booked, .cancel{
    color: #fff;
    padding: 6px 14px;
    float: right;
    margin-top: 10px;
    font-size: 18px;
    border: none;
    cursor: pointer
}
.container .item .tickets {background: #777}
.container .item .booked {background: #3D71E9}
.container .item .cancel {background: #DF5454}
.linethrough {text-decoration: line-through}
@media only screen and (max-width: 1150px) {
  .container .item {
    width: 100%;
    margin-right: 20px
  }
  div.container {
    margin: 0 20px auto
  }
}
</style>
</head>

<body>
    <?php 
    include '../config.php';
    session_start ();
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION["user"])){

    	header("location:../login.php"); 
    	
    
    }
    $id=$_REQUEST['sid'];
    $sql = "SELECT * FROM `bookingTable` where bookingId='$id'";      
        $request = mysqli_query($conn, $sql);  
                    
        while($row = mysqli_fetch_array($request)){ 
    ?>

<div class="container" id='printarea'>
  <h1 class="upcomming">Ticket Details</h1>
  <div class="item">
    <div class="item-right">
      <p class="num"><?php echo $row[3] ;?></p>
      <span class="up-border"></span>
      <span class="down-border"></span>
    </div> <!-- end item-right -->
    
<div class="container">
  <div class="item-left">
      <p class="event"><?php echo $row[1] ;?></p>
      <h3 class="title">PWAD Express</h3>
      
      <div class="sce">
        <div class="icon">
          <i class="fa fa-table"></i>
        </div>
        <p><?php echo $row[3] ;?><br/><?php echo $row[4] ;?></p>
      </div>
      <div class="fix"></div>
      <div class="loc">
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <p><?php echo $row[7] ;?><br/> </p><br/>
        
        
        <p><?php echo "Total Seat: ".$row[8] ;?><br><?php echo "Seat: ".$row[15] ;?><br/><?php echo "Total Price: ".$row[9] ;?></p>
      </div>
      <div class="fix"></div>
      
    </div> <!-- end item-right -->
  </div> <!-- end item -->
  <?php }?>


</div>
<button class="tickets" id="btn" onclick='printDiv()';>Download</button>
<script>
// $("#btn").click(function () {
//     $("#printarea").print();
// });
 </script>
<script>
$('#btn').on('click', function() {
  var printBlock = $(this).parents('#printarea').siblings('#printarea');
  printBlock.hide();
  window.print();
  printBlock.show();
});
</script>

</body>

</html>