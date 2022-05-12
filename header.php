<?php
  include "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <!-- Custom stlylesheet -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <!-- Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Header!</title>
  </head>
  <body>
    <!-- HEADER -->
   <div id="header-admin">
       <!-- container -->
       <div class="container">
           <!-- row -->
           <div class="row">
               <!-- LOGO -->
               <div class="col-md-8">
                   <a  href="#"> <img class="logo" src="../images/mylogo.jpg"> </a>
               </div>
               <!-- /LOGO -->
                 <!-- LOGO-Out -->
               <div class="col-lg-4">
                   <a class="admin-logout" href="#"> Hello, Logout </a>
               </div>
               <!-- /LOGO-Out -->
           </div>
       </div>
   </div>
   <!-- /HEADER -->

   <!-- Menu Bar -->
       <div id="admin-menubar">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                      <ul class="admin-menu">
                           <li>
                               <a href="services.php">Services</a>
                           </li>
                           <li>
                               <a href="about.php">About</a>
                           </li>
                           <li>
                               <a href="contact.php">Contact</a>
                           </li>
                           <li>
                               <a href="user.php">ADMIN</a>
                           </li>

                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <!-- /Menu Bar -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
