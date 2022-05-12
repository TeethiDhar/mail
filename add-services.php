<?php include "header.php";

//Checking files conditions--
  if(isset($_FILES['image'])){
    $errors = array();

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = end(explode('.',$file_name));

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions) === false)
    {
      $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    }

    if($file_size > 2097152){
      $errors[] = "File size must be 2mb or lower.";
    }

    if(empty($errors) == true){
      move_uploaded_file($file_tmp,"upload/".$file_name);
    }else{
      print_r($errors);
      die();
    }
  }
//Checking files conditions--

if(isset($_POST['save'])){
    include "config.php";

    $ServiceName = mysqli_real_escape_string($conn,$_POST['ServiceName']);
    $Cost = mysqli_real_escape_string($conn,$_POST['Cost']);
    $About = mysqli_real_escape_string($conn,$_POST['About']);
    
    $sql = "SELECT ServiceName FROM tblservices WHERE ServiceName = '{$ServiceName}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed.");

    if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Service Name already Exists.</p>";
  }else {
    $sql1 = "INSERT INTO tblservices (ServiceName, Cost, About, images)
              VALUES ('{$ServiceName}','{$Cost}','{$About}','{$file_name}')";
    if(mysqli_query($conn,$sql1)){
        header("Location: services.php");
        }else{
            echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Service.</p>";
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
                    <h1 class="admin-heading">Add Service</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form Start -->
                    <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Service Name</label>
                            <input type="text" name="ServiceName" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                        <label>About</label>
                        <input type="text" name="About" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" required>
                   </div>
                    <div class="form-group">
                      <label>Cost</label>
                      <input type="text" name="Cost" class="form-control" placeholder="Last Name" required>
                        </div>
                        <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
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
