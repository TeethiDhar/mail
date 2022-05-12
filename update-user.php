<?php
include "header.php";
if(isset($_POST['submit'])){
  include "config.php";

  $Adminid = mysqli_real_escape_string($conn,$_POST['Adminid']);
  $Adminname = mysqli_real_escape_string($conn,$_POST['Adminname']);
  $Username = mysqli_real_escape_string($conn,$_POST['Username']);
  $MOBILE = mysqli_real_escape_string($conn,$_POST['MOBILE']);
  $Email = mysqli_real_escape_string($conn,$_POST['EMAIL']);
  $password = mysqli_real_escape_string($conn,md5($_POST['password']));

  $sql = "UPDATE tbladmin SET AdminName = '{$Adminname}', UserName = '{$Username}', MobileNumber = '{$MOBILE}',Email = '{$Email}', Password = '{$password}' WHERE ID = {$Adminid}";

  if(mysqli_query($conn,$sql)){
    header("Location: user.php");
  }
}
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Abel&family=Bitter:wght@300&family=Fredoka&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
     <title>Add-User-Page</title>
     <style media="screen">
     form{
         background: #fff;
         padding: 25px;
         box-shadow:0 1px 3px rgba(0, 0, 0, 0.13);
     }
     form label{
       font-size: 25px;
       font-family: 'Abel', sans-serif;
       font-family: 'Bitter', serif;
       font-family: 'Fredoka', sans-serif;
       padding: 5px;
     }
     form .btn{
       font-size: 20px;
       font-family: 'Abel', sans-serif;
       font-family: 'Bitter', serif;
       font-family: 'Fredoka', sans-serif;
       padding: 5px;
       background: red;
     }

     </style>
   </head>
   <body>
<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
    <!-- User data getting PHP code -->
                <?php
                include "config.php";
                $admin_id = $_GET['id'];
                $sql = "SELECT * FROM tbladmin WHERE ID = {$admin_id}";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                ?>
  <!-- User data getting PHP code -->
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="Adminid" class="form-control" value="<?php echo $row['ID'];  ?>">
                      </div>
                          <div class="form-group">
                          <label>ADMIN NAME</label>
                          <input type="text" name="Adminname" class="form-control" value="<?php echo $row['AdminName'];?>" required>
                      </div>
                      <div class="form-group">
                          <label>USER NAME</label>
                          <input type="text" name="Username" class="form-control" value="<?php echo $row['UserName'];?>" required>
                      </div>
                      <div class="form-group">
                          <label>MOBILE NUMBER</label>
                          <input type="number" name="MOBILE" class="form-control" value="<?php echo $row['MobileNumber'];?>"required>
                      </div>
                      <div class="form-group">
                          <label>EMAIL</label>
                          <input type="text" name="EMAIL" class="form-control" value="<?php echo $row['Email'];?>"required>
                      </div>

                      <div class="form-group">
                          <label>PASSWORD</label>
                          <input type="password" name="password" class="form-control" value="<?php echo $row['Password'];?>"required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
                  <?php
                }
              }
                   ?>
              </div>
          </div>
      </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
