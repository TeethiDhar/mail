<?php
include "config.php";
// if($_SESSION["user_role"] == '0'){
//   header("Location: {$hostname}/admin/post.php");
// }
$contact_id = $_GET['id'];

$sql = "DELETE FROM tblcontact WHERE contact_id = {$contact_id}";

if(mysqli_query($conn, $sql)){
  header("Location: contact.php");
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the Contact Record.</p>";
}

mysqli_close($conn);

?>
