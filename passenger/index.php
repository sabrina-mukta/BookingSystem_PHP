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

      </div>
    </div>
  </nav> 

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-user"></i> User Dashboard</h1>
        </div>
      </div>
    </div>
  </header>

  
  <section id="posts">
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-md-2 ">
        <a href="index.php" class="text-left container-fluid btn btn-primary btn-lg mt-2"><h3><i class="fas fa-cog"></i>   Dashboard</h3></a>
          <button type="button" class=" text-left container-fluid btn btn-primary btn-lg mt-2 "><h3> <i class="fas fa-ticket-alt"></i>   Ticket History</h3></button>
          <button type="button" class="text-left container-fluid btn btn-primary btn-lg mt-2 "><h3><i class="fas fa-address-card"></i>   Profile</h3></button>
          <a href="logout.php" class="text-left container-fluid btn btn-primary btn-lg mt-2"><h3><i class="fas fa-sign-out-alt"></i> Log Out </h3></a>
          
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h4>Ticket History</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Booking Id</th>
                  <th>Booking Date</th>
                  <th>Route Name</th>
                  <th>Total Seat</th>
                  <th>Seat List</th>
                  <th>Price</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
<?php 
        include '../config.php';
        session_start ();
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION["user"])){

    	header("location:../login.php"); 
    	
    
    }
        $id=$_SESSION['userId'];
        $sql = "SELECT * FROM `bookingTable` where passengerId='$id'";      
        $request = mysqli_query($conn, $sql);  
                    
        while($row = mysqli_fetch_array($request)){ 
    ?>
                <tr>
                  <td><?php echo $row[1] ;?></td>
                  <td><?php echo $row[3] ;?></td>
                  <td><?php echo $row[7] ;?></td>
                  <td><?php echo $row[8] ;?></td>
                  <td><?php echo $row[15] ;?></td>
                  <td><?php echo $row[9] ;?></td>

                  <td>
                    <a href="details.php?sid=<?php echo $row[1]; ?>" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <!-- <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i> 6
              </h4>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div> -->

          <div class="card text-center  text-dark mb-3">
            <div class="card-body">
              
              <!-- <h3>Profile</h3> -->
              <h4 class="display-4">
                <center>
                <img style="height:135px ; width:50%;" src="img/avatar.png" alt="" class="d-block"/></center>
              </h4>
              <?php
                
              ?>
              Name    : <?php echo $_SESSION['userName'] ;?> <br>
              Email : <?php echo $_SESSION['userEmail']  ;?> <br>
              <a href="profile.php" class="btn btn-outline-dark btn-sm mt-2">Edit Details</a>
            </div>
          </div>

          <!-- <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> 4
              </h4>
              <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Blogen
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- MODALS -->

  <!-- ADD POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Add Post</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control">
                <option value="">Web Development</option>
                <option value="">Tech Gadgets</option>
                <option value="">Business</option>
                <option value="">Health & Wellness</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Upload Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image">
                <label for="image" class="custom-file-label">Choose File</label>
              </div>
              <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
              <label for="body">Body</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
        </div> -->
      </div>
    </div>
  </div>


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