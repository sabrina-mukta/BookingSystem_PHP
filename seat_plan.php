<?php 
require_once 'config.php';
$values=$_REQUEST['values'];


//$idc=$_REQUEST['idc'];

 $sql="SELECT * FROM `seat` where scheduleId='$idc'";
        $request = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($request)) {
          
            
    
            ?>
            <tr>
              <td><?php echo $row[2];?></td>
              <td><?php echo $row[4];?></td>
              <td><?php echo $row[8];?></td>
              <!--<td><?php //echo $row[5];?></td>-->
              <div>
                  <td><button class="btn btn-primary" id="DetailsShow<?php echo $x++?>" onclick="cartDetails(id,'<?php echo $row[0]?>')">Details</button></td>
              </div>
      
            </tr>
            
            <?php } ?>

?>