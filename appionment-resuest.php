<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Googel Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Barlow:wght@300&family=Bitter:wght@300&family=Dancing+Script:wght@500&family=Fredoka&family=Roboto+Slab&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
    }
      body{
        /* background-image: url('../images/appointment.jpg'); */
        background-size: cover;
        background-repeat: no-repeat;
        max-width: 100%;
        height: 100vh;
      }
      table tr th{
        font-size: 25px;
        padding: 2px;
        color: #f5f6fa;
        font-weight: 600;
       font-family: 'Abel', sans-serif;
       font-family: 'Barlow', sans-serif;
       font-family: 'Bitter', serif;
       font-family: 'Dancing Script', cursive;
      }
      .appointment-heading{
        text-align: center;
        font-size: 50px;
        color: #f5f6fa;
        font-weight: 400;
        padding: 50px;
        font-family: 'Abel', sans-serif;
       font-family: 'Barlow', sans-serif;
       font-family: 'Bitter', serif;
       font-family: 'Dancing Script', cursive;
      }
    </style>

    <title>Appointment</title>
  </head>
  <body>
    <h1 class="appointment-heading">Booking Requests</h1>
    <div class="container appointment-form" >
      <div class="row">
        <div class="col">
          <?php
             include "config.php";
             $sql = "SELECT * FROM tblappointment ORDER BY ID DESC";
             $result = mysqli_query($conn, $sql) or die("Query Failed.");
             if(mysqli_num_rows($result) > 0){
           ?>
           <table class="table">
             <thead>
               <tr>
                  <th scope="col">ID</th>
                 <th scope="col">Name</th>
                 <th scope="col">Phone Number</th>
                 <th scope="col">Full Address</th>
                 <th scope="col">Choose</th>
                 <th scope="col">Choose Your Date</th>
                 <th scope="col">Pending</th>

               </tr>
             </thead>
             <tbody>
             <?php
                  while($row = mysqli_fetch_assoc($result)) {
                ?>
               <tr>
                 <td><?php echo $row['ID']; ?></td>
                 <td><?php echo $row['Name']; ?></td>
                 <td><?php echo $row['PhoneNumber']; ?></td>
                 <td><?php echo $row['FullAddress']; ?></td>
                 <td><?php echo $row['Choose']; ?></td>
                 <td><?php echo $row['Date']; ?></td>
                 <td><i class="fa-solid fa-xmark"></i></td>
                 <td><i class="fa-solid fa-check"></i></td>
               </tr>
               <?php }   ?>
             </tbody>
           </table>
<?php } ?>
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
