<?php require_once 'config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["agent"])){

	header("location:../login.php"); 

}
$shedule_id=$_REQUEST['shedule_id'];
$totalPrice=$_REQUEST['totalPrice2'];
$seat_no=$_REQUEST['seat_no'];
$userName=$_REQUEST['userName'];




$shedule_value=explode(', ',$seat_no);

$key = "BID-";
$year = date("Y");
$month = date("m");
$day = date("d");
$letter = chr(rand(65,90));

$ticket=rand(1000,9999);

$fnl=$key.$year.$month.$day.$letter.$ticket;
$bookingId =$fnl;
//$count
$shedule_value=explode(', ',$seat_no);
$totalSeatBooking=0;

$sql="select * from busSchedule where scheduleId='$shedule_id'";
            $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($query)){
                $busId=$row[1];
                $bookingDate=$row[5];
                $startPoint=$row[6];
                $endPoint=$row[7];
                $routeId=$row[3];
                $routeName=$startPoint.'-'.$endPoint;
            }
$passengerName=$userName;     
$sellBy=$_SESSION['userName']; 
$sellUserType=2;

foreach ($shedule_value as $value) {
$totalSeatBooking+=1;

$sql1="UPDATE `seat` SET `$value`='1' where `scheduleId`='$shedule_id' ";
$query=mysqli_query($conn,$sql1);
}

$sql2="INSERT INTO `bookingTable`(`bookingId`, `busId`, `bookingDate`, `passengerName`, `routeId`, `routeName`, `totalSeatBooking`, `price`, `discount`, `priceWithDiscount`, `seatNumber`, `sellBy`, `sellYouserType`) VALUES ('$bookingId','$busId','$bookingDate','$passengerName','$routeId','$routeName','$totalSeatBooking','$totalPrice','0','$totalPrice','$seat_no','$sellBy','$sellUserType')";
$query=mysqli_query($conn,$sql2);



?>