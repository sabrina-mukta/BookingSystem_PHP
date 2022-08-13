<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["agent"])){

	header("location:../login.php"); 

}

$id=$_GET['bookingId'];
$sql="DELETE from bookingTable where bookingId='$id'";
$query= mysqli_query($conn, $sql);
header("Location:booking_list1.php");
?>