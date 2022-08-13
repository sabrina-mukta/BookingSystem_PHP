<?php
include '../../config.php';
$term = mysqli_real_escape_string($conn,$_GET['term']);
$sql = "SELECT * FROM `busTable` WHERE `busId` LIKE '$term%'";
$query = mysqli_query($conn, $sql);
$result = [];
while($data = mysqli_fetch_array($query))
{
    $result[] = $data['busId'];
}
echo json_encode($result);
?>