<!-- code fetch data -->
<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != TRUE ){
     
header("location:index.php");
exit;
}


 ?>
<?php 
include 'bootstrap.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

 <div class="dropdown">

  <button class="btn btn-danger dropdown-toggle py-4 m-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
     <i class="fa-solid fa-bars" style="font-size: 30px;"></i> &nbsp;&nbsp;Admin Pannel
  </button>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="Std_Details.php"> Show Student Details</a></li>
    <li><a class="dropdown-item" href="#">Add To Our Team</a></li>
    <li><a class="dropdown-item" href="#">Add to About Our Institute</a></li>
  </ul>
</div>
  





</div>


<div>
<a href="log_out.php"> <button class="btn btn-dark py-3 m-3">Log Out</button> </a>
</div>



 </body>
 </html>
