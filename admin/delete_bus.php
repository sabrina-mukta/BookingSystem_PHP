<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$id=$_GET['busId'];
$sql="DELETE from busTable where busId='$id'";
$query= mysqli_query($conn, $sql);
header("Location:bus_list.php");
?>