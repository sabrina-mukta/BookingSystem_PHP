<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$id=$_GET['routeId'];
$sql="DELETE from route where routeId='$id'";
$query= mysqli_query($conn, $sql);
header("Location:route_list.php");
?>