<?php 
$x=1;
require_once 'config.php';
$date=date('Y-m-d',strtotime($_REQUEST['date']));
$from=$_REQUEST['from'];
$till=$_REQUEST['till'];
 $sql="SELECT * FROM `busSchedule` where `status1`='1'  ";
        $request = mysqli_query($conn, $sql);
        
        while ($row = mysqli_fetch_array($request)) {
            if($date==$row[5] && $row[6]==$from  && $row[7]==$till){
            
    
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
            
            <?php }} ?>

?>