<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$id=$_GET['scheduleId'];
$sql="DELETE from busSchedule where scheduleId='$id'";
$query= mysqli_query($conn, $sql);
header("Location:schedule_list.php");
?>