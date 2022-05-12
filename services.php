<?php include "header.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Page</title>
  </head>
  <body>

    <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h1 class="admin-heading">All SERVICES</h1>
              </div>
              <div class="col-md-6">
                  <a class="add-new" href="add-services.php">add services</a>
              </div>
              <div class="col-md-8">

                <?php
                include "config.php";
                $limit = 5;
                  if(isset($_GET['page'])){
                    $page = $_GET['page'];
                  }else{
                    $page = 1;
                  }
                  $offset = ($page - 1) * $limit;
                $sql = "SELECT * FROM tblservices ORDER BY ID DESC LIMIT {$offset},{$limit}";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                 ?>
                <table class="table content-table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Service Name</th>
                      <th scope="col">About</th>
                      <th scope="col">Cost</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                   <tbody>
                     <?php
                          while($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <tr>
                      <td><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['ServiceName']; ?></td>
                      <td><?php echo $row['About']; ?></td>
                      <td><?php echo $row['Cost']; ?></td>
                      <td class='edit'><a href='update-services.php?id=<?php echo $row["ID"];?>'><i class='fa fa-edit'></i></a></td>
                    <td class='delete'><a href='delete-services.php?id=<?php echo $row["ID"];?>'><i class='fa fa-trash-o'></i></a></td>
                    </tr>
                    <?php } ?>
                   </tbody>
                </table>
                <?php }
                // show pagination
                $sql1 = "SELECT * FROM tblservices";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){
                //total records we have----
                  $total_records = mysqli_num_rows($result1);
                  //tatal pages we want to show-----
                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="services.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="services.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="services.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
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
