<?php
    include '../config.php';
    session_start ();
    if(!isset($_SESSION["user"])){

    	header("location:../login.php"); 

    }
?>
<?php
                    require "../config.php";
                        if (isset($_POST['submit'])) {
                       
                        
                        $passengerId = $_SESSION['userId'];
                        $firstName = $_POST['firstName'];
                        $emailAddress = $_POST['emailAddress'];
                        $password1 = $_POST['password1'];

                        
                        
                        $sql = "UPDATE `passengerTable` SET `firstName`='$firstName',`emailAddress`='$emailAddress',`password1`='$password1' WHERE `passengerId`='$passengerId';";
                        
                        $request = mysqli_query($conn, $sql);
                        
                        
                        
                        $sql1 ="UPDATE `userTable` SET `userName`='$firstName',`userPassword`='$password1',`userEmail`='$emailAddress' where `userId`='$passengerId';";
                        
                        $request1 = mysqli_query($conn, $sql1);
                             
                       if($request){
                            header("Location:../login.php");
                        }else{
                            echo "Failed".mysqli_error($conn);
                        
                    }}
                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Bootstrap Theme</title>
</head>

<body>
  
  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-user"></i> Edit Profile</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="index.php" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- PROFILE -->
  <section id="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                
              <form action="" method="POST" enctype="multipart/form-data">
                  
                    <?php
                    $id=$_SESSION['userId'];
                    $sql3="select * from `userTable` where `userId`='$id'";
                        $query= mysqli_query($conn, $sql3);
                        while($row=mysqli_fetch_array($query)){
                  ?>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="firstName" name="firstName" class="form-control" value="<?php echo $row[1];?>">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="emailAddress" id="emailAddress" value="<?php echo $row[3];?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password1" name="password1" class="form-control" value="<?php echo $row[2];?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="passengerId" name="passengerId" hidden value="<?php echo $row[0];?>">
                </div>
                <input type="submit" id="submit" name="submit" name="submit" >
                <?php } ?>
                
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h3>Your Avatar</h3>
          <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
          <button class="btn btn-primary btn-block">Edit Image</button>
          <button class="btn btn-danger btn-block">Delete Image</button>
        </div>
      </div>
    </div>
  </section>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    CKEDITOR.replace('editor1');
  </script>
</body>

</html>