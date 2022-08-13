// <?php 
// include '../config.php';

// echo $a=$_GET['term'];
                                                 
// $query = "SELECT * FROM route WHERE routeId LIKE '$a%' LIMIT 25";
// $result = mysqli_query($conn, $query);
//                 while ($user = mysqli_fetch_array($result)) {
//                 $res[] = $user['routeId'];
//                 }
// echo json_encode($res);
// ?>

<?php 
include '../config.php';
echo $cl=$_REQUEST['term']; // Request or get
$sql="Select * from route where routeId like '$cl%'";
$query= mysqli_query($conn, $sql);
while($row= mysqli_fetch_array($query)){
    $data[]=$row['routeId'];
}
echo json_encode($data);
?>