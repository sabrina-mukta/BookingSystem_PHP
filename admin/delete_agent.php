<?php
include '../config.php';
session_start ();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}

$id=$_GET['agentId'];
$sql="DELETE from agentTable where agentId='$id'";
$query= mysqli_query($conn, $sql);
header("Location:agent_list.php");
?>