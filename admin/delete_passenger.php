<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$id=$_GET['passengerId'];
$sql="DELETE from passengerTable where passengerId='$id'";
$query= mysqli_query($conn, $sql);
header("Location:passenger_list.php");
?>