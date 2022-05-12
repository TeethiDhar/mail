<?php
include "config.php";

$servicesid = $_GET['id'];

$sql1 = "SELECT * FROM tblservices WHERE ID = {$servicesid}";
$result = mysqli_query($conn, $sql1) or die("Query Failed: Select");
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['images']);

$sql = "DELETE FROM tblservices WHERE ID = {$servicesid}";

if(mysqli_query($conn, $sql)){
  header("Location: services.php");
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the Services Record.</p>";
}

mysqli_close($conn);

?>
