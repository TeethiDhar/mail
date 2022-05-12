<?php
include "config.php";
// if($_SESSION["user_role"] == '0'){
//   header("Location: {$hostname}/admin/post.php");
// }
$adminid = $_GET['id'];

$sql = "DELETE FROM tbladmin WHERE ID = {$adminid}";

if(mysqli_query($conn, $sql)){
  header("Location: user.php");
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the Admin Record.</p>";
}

mysqli_close($conn);

?>
