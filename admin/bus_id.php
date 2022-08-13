<?php require_once '../config.php';
session_start ();
if(!isset($_SESSION["login"])){

	header("location:../login.php"); 

}
$routeName=$_REQUEST['routeName'];
$busName=$_REQUEST['busName'];
$sql = "SELECT * FROM `busTable` WHERE `routeName`='$routeName' AND `busName`='$busName'";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query))
{
$result2=$data[3];
}
echo json_encode($result2);


