<?php
include "config.php";

if(empty($_FILES['new-images']['name'])){
  $file_name = $_POST['old-images'];
}else{
  $errors = array();

  $file_name = $_FILES['new-images']['name'];
  $file_size = $_FILES['new-images']['size'];
  $file_tmp = $_FILES['new-images']['tmp_name'];
  $file_type = $_FILES['new-images']['type'];
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

  $serviceid = mysqli_real_escape_string($conn,$_POST['serviceid']);
  $ServiceName = mysqli_real_escape_string($conn,$_POST['ServiceName']);
  $About = mysqli_real_escape_string($conn,$_POST['About']);
  $Cost = mysqli_real_escape_string($conn,$_POST['Cost']);

  $sql = "UPDATE tblservices SET ServiceName = '{$ServiceName}', About = '{$About}',images = '{$file_name}' ,Cost = '{$Cost}' WHERE ID = {$serviceid}";

  if(mysqli_query($conn,$sql)){
    header("Location: services.php");
  }

 ?>
