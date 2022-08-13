<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$id=$_GET['refundId'];
$sql="DELETE FROM `refundTable` WHERE refundId = '$id'";
$query= mysqli_query($conn, $sql);
header("Location:refund_list.php");
?>