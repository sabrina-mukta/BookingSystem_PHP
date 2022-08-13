<?php require_once '../config.php';
session_start ();
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}
$routeName=$_REQUEST['routeName'];
$sql = "SELECT * FROM `route` WHERE `routeName`='$routeName'";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query))
{
$result1=$data[5];
}
echo json_encode($result1);


