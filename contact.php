<?php include "header.php";?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
    #admincontent{
      margin-top: 5%;
    }

    #admincontent .admin-heading{
    font-size: 35px;
    margin: 0 0 15px;
     }

    #admincontent .add-new{
        color: red;
        font-size: 15px;
        font-weight: 600;
        text-align: center;
        text-transform: uppercase;
        padding: 7px 5px;
        transition: all 0.3s;
    }

    </style>

    <title>Contact Page</title>
  </head>
  <body>

    <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h1 class="admin-heading">Contact</h1>
              </div>
              <div class="col-md-6">
                  <a class="add-new" href="add-contact.php">add contact</a>
              </div>
              <div class="col-md-8">

                <?php
                include "config.php";
                $sql = "SELECT * FROM tblcontact ORDER BY contact_id DESC";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                 ?>
                <table class="table content-table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Contact address</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                   <tbody>
                     <?php
                          while($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <tr>
                      <td><?php echo $row['contact_id']; ?></td>
                      <td><?php echo $row['contact_number']; ?></td>
                      <td><?php echo $row['contact_address']; ?></td>
                      <td class='edit'><a href='update-contact.php?id=<?php echo $row["contact_id"];?>'><i class='fa fa-edit'></i></a></td>
                      <td class='delete'><a href='delete-contact.php?id=<?php echo $row["contact_id"];?>'><i class='fa fa-trash-o'></i></a></td>
                    </tr>
                    <?php } ?>
                   </tbody>
                </table>
<?php } ?>
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
