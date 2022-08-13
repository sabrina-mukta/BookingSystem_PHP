<?php
include '../../config.php';
$term = mysqli_real_escape_string($conn,$_GET['term']);
$sql = "SELECT * FROM `seatSerial` WHERE `serial` LIKE '$term%'";
$query = mysqli_query($conn, $sql);
$result = [];
while($data = mysqli_fetch_array($query))
{
    $result[] = $data['serial'];
}
echo json_encode($result);
?>