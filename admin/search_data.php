<?php 
require_once '../config.php';
echo $date=date('Y-m-d',strtotime($_REQUEST['date']));

$sql="SELECT * FROM `busSchedule` where `status`='1'  ";
        $request = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($request)) {
            if($date==$row[5]){
            
    
            ?>
            <tr>
              <td><?php echo $row[2];?></td>
              <td><?php echo $row[4];?></td>
              <td><?php echo $row[8];?></td>
              <!--<td><?php //echo $row[5];?></td>-->
              <div>
                  <td><button class="btn btn-primary" id="DetailsShow">Details</button></td>
              </div>
      
            </tr>
            
            <?php }} ?>

?>