<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$bookingId=$_GET['bookingId'];
$sql="DELETE FROM `bookingTable` WHERE bookingId='$bookingId'";
$query= mysqli_query($conn, $sql);
header("Location:booking_list.php");
?>