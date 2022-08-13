<?php require_once '../config.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" 
    integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
<link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="cart.css" rel="stylesheet">
  </head>
  <body class="bg">
    
    
    <div class="mt-1" style="height: 85px; width:100%; background-color:antiquewhite;">
      
      <h1 style="text-align: center;">Choise Your Seat
        <button class="btn btn-primary " type="submit"><a href="index.php" class="text-light">Back To Home </a> </button></h1> 
      
      
    </div>
    <div class="container">
      <div class="row">
      <div class=" joy col-5 mt-3" style="height: 580px; width: 25%;">
        <?php 
        $id=$_REQUEST['idc'];
        
        $sql="select * from seat where scheduleId='$id'";
            $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($query)){
        
        
        ?>
            <img src="pictures/1.jpg" class="rounded float-end" height="40px" width="40px"><br><br><br><br>
            <div>
            <?php  if($row[3]==1){ ?>
            <button  type="button" class="btn btn-info" id="A1" name="A1" style="background-color:red;color:white;" disabled >A-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="A1" name="A1" onclick="seatSelect(id)" >A-1</button>
            <?php } ?>
            <?php  if($row[4]==1){ ?>
            <button  type="button" class="btn btn-info" id="A2" name="A2" style="background-color:red;color:white;" disabled >A-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="A2" name="A2" onclick="seatSelect(id)" >A-2</button>
            <?php } if($row[6]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="A4" name="A4" style="background-color:red;color:white;" disabled >A-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="a4" name="a4" onclick="seatSelect(id)">A-4</button>
            <?php } if($row[5]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="A3" name="A3" style="background-color:red;color:white;" disabled >A-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="A3" name="A3" onclick="seatSelect(id)">A-3</button>
            <?php } ?>
       </div><br>
            <div>
            <?php  if($row[7]==1){ ?>
            <button  type="button" class="btn btn-info" id="B1" name="B1" style="background-color:red;color:white;" disabled >B-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="B1" name="B1" onclick="seatSelect(id)" >B-1</button>
            <?php } ?>
            <?php  if($row[8]==1){ ?>
            <button  type="button" class="btn btn-info" id="B2" name="B2" style="background-color:red;color:white;" disabled >B-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="B2" name="B2" onclick="seatSelect(id)" >B-2</button>
            <?php } if($row[10]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="B4" name="A4" style="background-color:red;color:white;" disabled >B-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="B4" name="B4" onclick="seatSelect(id)">B-4</button>
            <?php } if($row[9]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="B3" name="B3" style="background-color:red;color:white;" disabled >B-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="B3" name="B3" onclick="seatSelect(id)">B-3</button>
            <?php } ?>
       </div><br>
            <div>
            <?php  if($row[11]==1){ ?>
            <button  type="button" class="btn btn-info" id="C1" name="C1" style="background-color:red;color:white;" disabled >C-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="C1" name="C1" onclick="seatSelect(id)" >C-1</button>
            <?php } ?>
            <?php  if($row[12]==1){ ?>
            <button  type="button" class="btn btn-info" id="C2" name="C2" style="background-color:red;color:white;" disabled >C-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="C2" name="C2" onclick="seatSelect(id)" >C-2</button>
            <?php } if($row[14]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="C4" name="C4" style="background-color:red;color:white;" disabled >C-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="C4" name="C4" onclick="seatSelect(id)">C-4</button>
            <?php } if($row[13]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="C3" name="C3" style="background-color:red;color:white;" disabled >C-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="C3" name="C3" onclick="seatSelect(id)">C-3</button>
            <?php } ?>
       </div><br>
            <div>
            <?php  if($row[15]==1){ ?>
            <button  type="button" class="btn btn-info" id="D1" name="D1" style="background-color:red;color:white;" disabled >D-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="D1" name="D1" onclick="seatSelect(id)" >D-1</button>
            <?php } ?>
            <?php  if($row[16]==1){ ?>
            <button  type="button" class="btn btn-info" id="D2" name="D2" style="background-color:red;color:white;" disabled >D-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="D2" name="D2" onclick="seatSelect(id)" >D-2</button>
            <?php } if($row[18]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="D4" name="D4" style="background-color:red;color:white;" disabled >D-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="D4" name="D4" onclick="seatSelect(id)">D-4</button>
            <?php } if($row[17]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="D3" name="D3" style="background-color:red;color:white;" disabled >D-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="D3" name="D3" onclick="seatSelect(id)">D-3</button>
            <?php } ?>
       </div><br>
            <div>
            <?php  if($row[19]==1){ ?>
            <button  type="button" class="btn btn-info" id="E1" name="E1" style="background-color:red;color:white;" disabled >E-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="E1" name="E1" onclick="seatSelect(id)" >E-1</button>
            <?php } ?>
            <?php  if($row[20]==1){ ?>
            <button  type="button" class="btn btn-info" id="E2" name="E2" style="background-color:red;color:white;" disabled >E-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="E2" name="E2" onclick="seatSelect(id)" >E-2</button>
            <?php } if($row[22]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="E4" name="E4" style="background-color:red;color:white;" disabled >E-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="E4" name="E4" onclick="seatSelect(id)">E-4</button>
            <?php } if($row[21]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="E3" name="E3" style="background-color:red;color:white;" disabled >E-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="E3" name="E3" onclick="seatSelect(id)">E-3</button>
            <?php } ?>
       </div><br>
            <div>
            <?php  if($row[23]==1){ ?>
            <button  type="button" class="btn btn-info" id="F1" name="F1" style="background-color:red;color:white;" disabled >F-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="F1" name="F1" onclick="seatSelect(id)" >F-1</button>
            <?php } ?>
            <?php  if($row[24]==1){ ?>
            <button  type="button" class="btn btn-info" id="F2" name="F2" style="background-color:red;color:white;" disabled >F-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="F2" name="F2" onclick="seatSelect(id)" >F-2</button>
            <?php } if($row[26]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="F4" name="F4" style="background-color:red;color:white;" disabled >F-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="F4" name="F4" onclick="seatSelect(id)">F-4</button>
            <?php } if($row[25]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="F3" name="F3" style="background-color:red;color:white;" disabled >F-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="F3" name="F3" onclick="seatSelect(id)">F-3</button>
            <?php } ?>
       </div><br>
            <div>
            <?php  if($row[27]==1){ ?>
            <button  type="button" class="btn btn-info" id="G1" name="G1" style="background-color:red;color:white;" disabled >G-1</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="G1" name="G1" onclick="seatSelect(id)" >G-1</button>
            <?php } ?>
            <?php  if($row[28]==1){ ?>
            <button  type="button" class="btn btn-info" id="A2" name="G2" style="background-color:red;color:white;" disabled >G-2</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info" id="G2" name="G2" onclick="seatSelect(id)" >G-2</button>
            <?php } if($row[30]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="G4" name="G4" style="background-color:red;color:white;" disabled >G-4</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="G4" name="G4" onclick="seatSelect(id)">G-4</button>
            <?php } if($row[29]==1){?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="G3" name="G3" style="background-color:red;color:white;" disabled >G-3</button>
            <?php }else{ ?>
            <button  type="button" class="btn btn-info rounded float-end me-1" id="G3" name="G3" onclick="seatSelect(id)">G-3</button>
            <?php } ?>
       </div><br>

       <?php } ?><br>
       <div class="text" style="height: 35px; width:100%;background-color: rgb(97, 97, 97);"> <p style="color:aliceblue;">Engine</p> </div>
           </div>
      <div class=" rounded  col-8 mt-4"> 
        <div class="show_box joy1" style="margin-left:105px"> Your Selected Seat Details </div>
        <div class="table joy2 " style="margin-left:105px"> 
          <table class="table table-dark table-striped-columns ">
            <tr>
                <th>Action</th>
              <th>Bus Name</th>
              <th>Seat No.</th>
              <th>From</th>
              <th>To</th>
              <th>Amount</th>
              <th>Arrival Time</th>
            </tr>
            <?php 
            $id=$_REQUEST['idc'];
            $sql="select * from busSchedule where scheduleId='$id'";
            $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><button type="button" class="btn btn-info"data-bs-toggle="modal" data-bs-target="#exampleModal">Order</button></td>    
              <td><?php echo $row[2]?></td>
              <td class="seatno"></td>
              <td><?php echo $row[6]?></td>
              <td><?php echo $row[7]?></td>
              <td  class="totalPrice1" id="totalPrice1"></td>
              <td><?php echo $row[4]?></td>

            </tr>
            <span>Passenger Name:</span>
            <input type="text" name="userName" id="userName" value="" /><hr>
            <input type="text" name="bus_id" id="bus_id" hidden value="<?php echo $row[1]?>" />
            <input type="text" name="price" id="price" hidden value="<?php echo $row[8]?>" />
            <input type="text" name="totalPrice" id="totalPrice" hidden value="" />
            
            <input type="text" name="route_id1" id="route_id1" hidden value="<?php echo $row[3]?>" />
            <input type="text" name="shedule_id" id="shedule_id" hidden value="<?php echo $id?>" />

            <input type="text" name="seat_no" id="seat_no" hidden class="seat_no" value="" />
            <?php }?>
          </table>
          
        </div>
    </div>
    </div>
    </div>

   <script>
   var values = [];
   var count = 0;
   function selected(id){
       $("#"+id).css("background", "red");
        $('#'+id).prop('disabled', true);
   }
   function seatSelect(id){
       count=count+1;
       var price=$('#price').val();
    if(count<=4){
             
                var totalPrice=(price*count);
                $("#"+id).css("color", "white");
                
                $("#"+id).css("background", "blue");
                var ak=$(".seatno").append(id+" ");
                $("#totalPrice1").html(totalPrice);
                $("#totalPrice").val(totalPrice);
                $('#'+id).prop('disabled', true);
                
                
               values.push(id);
                // alert(abc);
                $.each( values, function( key, value ) {
                    var ab=$('[name="seat_no"]').attr({value: values.join(', ')});
        })
    
   }else {
       alert("You can't Book more than 4 seat");
   }
//   $.ajax({
//           url:'seat_book.php',
//           method:'POST',
//           dataType:'html',
//           data:{totalPrice:totalPrice},
//           success:function(){
//           }
//       })
   }
   
   function seatBooking(){
       var shedule_id=$('#shedule_id').val();
       var userName=$('#userName').val();
       var seat_no=$('#seat_no').val();
       var totalPrice2=$('#totalPrice').val();
       var pay=$('#pay').val();
       var pay_mobile=$('#pay_mobile').val();
       var transaction_Number=$('#transaction_Number').val();
       
       $.ajax({
           url:'seat_book.php',
           method:'POST',
           dataType:'html',
           data:{shedule_id:shedule_id,seat_no:seat_no,userName:userName,totalPrice2:totalPrice2},
           success:function(){
               $('#modalv').modal('hide');
               window.location.assign('passenger/index.php');
           }
       })
       
       
   }

   </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" id="modalv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <div class="modal-body">
       <h3>Bkash,Nagad,Rocket: 01704231515</h3>
       <span>select Payment Method:</span><br>
       <select name="pay" class="form-control" id="pay">
          <option value="">select option</option> 
          <option value="Bkash">Bkash</option> 
          <option value="Nagad">Nagad</option> 
          <option value="Rocket">Rocket</option> 
       </select>
      <br> <span>Payment Number:</span><br>
           <input type="number" class="form-control" name="mobile" id="pay_mobile">
           <br><span>Transaction ID:</span><br>
           <input type="text" class="form-control" name="transaction_Number" id="transaction_Number">
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="seatBooking()">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>