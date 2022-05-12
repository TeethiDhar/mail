<?php include "header.php";
if(isset($_POST['save'])){
    include "config.php";

    $Adminname = mysqli_real_escape_string($conn,$_POST['Adminname']);
    $Username = mysqli_real_escape_string($conn,$_POST['Username']);
    $MOBILE = mysqli_real_escape_string($conn,$_POST['MOBILE']);
    $Email = mysqli_real_escape_string($conn,$_POST['Email']);
    $password = mysqli_real_escape_string($conn,md5($_POST['password']));

    $sql = "SELECT UserName FROM tbladmin WHERE UserName = '{$Username}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed.");

    if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
  }else {
    $sql1 = "INSERT INTO tbladmin (AdminName,UserName, MobileNumber, Email, Password)
              VALUES ('{$Adminname}','{$Username}','{$MOBILE}','{$Email}','{$password}')";
    if(mysqli_query($conn,$sql1)){
        header("Location: user.php");
        }else{
            echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
            }
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
                    <h1 class="admin-heading">Add Admin</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form Start -->
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                        <div class="form-group">
                            <label>ADMIN NAME</label>
                            <input type="text" name="Adminname" class="form-control" required>
                        </div>
                            <div class="form-group">
                            <label>USER NAME</label>
                            <input type="text" name="Username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>MOBILE NUMBER</label>
                            <input type="text" name="MOBILE" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <center> <button type="submit"  class="btn btn-primary" name="save">Add User</button> </center>
                    </form>


                     <!-- Form End-->
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















<?php //include "footer.php"; ?>
