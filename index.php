<?php 
include 'bootstrap.php';
 ?>

 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saraswati";
$connection =  mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM student";
$result = mysqli_query($connection,$sql)


  ?>


 <!DOCTYPE html>
 <html>
 <head>

  <style>
   
  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
  
 <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\BG_Project\bootstrap\css">
 <script type="text/javascript" src="C:\xampp\htdocs\BG_Project\bootstrap\js"></script>
 </head>
 <body>

<div class="row bg-danger my-3 ml-3">
  <div class="col-md-3 my-3">
    <h4>BG Educational Foundation</h4>
  </div>

<!-- column div open -->
<div class="col-md-7">
 <nav class="navbar navbar-expand-lg m-10">

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link bg-dark text-white" href="#">Home </a>
      </li>

      <li class="nav-item">
        <a class="nav-link bg-primary " href="insert_form.php">Admission Form</a>
      </li>

      <li class="nav-item">
        <a class="nav-link bg-secondary" href="about.php">About </a>
      </li>

      <li class="nav-item">
        <a class="nav-link bg-success" href="contact.php">Contact</a>
      </li>
    </ul>

</div>
</nav>
  </div> 


  
  <!-- column div closed -->
  <div class="col-md-1" style="margin-top: 20px;">
    <button type="button" class="btn btn-dark p-3" style="border:3px solid black; margin-top: 10px;" data-toggle="modal" data-target="#mymodal">
      <i class="fa-solid fa-user"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="mymodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title">SignUp</h5>
           <button type="button" class="close" data-dismiss="modal">
             <span>&times;</span>
           </button>
         </div>


         <!-- modal-body  -->
         <div class="modal-body">
          <form action="login.php" method="POST">

            <div class="form-group">
              <i class="fa-solid fa-user fa-2x" ><label style="font-size:33px;">&nbsp;&nbsp;</i>UserName:</label>
              <input type="text" name="user" class="form-control" >
              <br>
            </div>

            <div class="form-group">
              <i class="fa-solid fa-lock fa-2x"><label style="color: black;">&nbsp;&nbsp;</i>Password:</label>
              <input type="Password" name="password" class="form-control" >
              <br>
            </div>

            <div>
             <button type="submit" class="btn btn-dark p-2">Submit</button>
           </div>

         </form>
       </div>
       <!-- modal footer -->
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div><!-- row div closed -->


<div class="container bg-secondary ">
	<h3>BG Educational Foundation</h3>
	<h5>Ghorahi-15 Sahid Gate Dang</h5>
</div>

<div class="containr">
<div   id="carouselExampleControls" class=" carousel slide my-3" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="image/laptop.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="image/laptop.jpg" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="image/laptop.jpg" alt="Third slide">
    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>


<div class="header p-3 m-5">
  <h3>Student Details</h3>
</div>

<div class="main d-flex p-2">
  <?php 
    while($row = mysqli_fetch_array($result)){
  ?>
 
  <div class="card shadow rounded bg-white rounded">

  <div class="image">
    <img src="<?php echo $row['photo'] ?>">
  </div>
  <div class="caption">
    <p><strong>Name:</strong><?php echo $row['std_name']; ?></p>
    <p><strong>Course:</strong><?php echo $row['Your_course'] ?></p>
    <p><strong>Email:</strong><a href="#"><?php echo $row['email']; ?></a></p>
    <p><strong>Contact:</strong><?php echo $row['Contact']; ?></p>
    <p><strong>Adress:</strong><?php echo $row['Adress']; ?></p>
    <p><strong>Gender:</strong><?php echo $row['Gender']; ?></p>
    
  </div>

</div>
<?php 
}
 ?>
    
</div>



<!-- footer -->

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="khum raj" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Khum Raj :
    <a class="text-white" href="#">BG Project</a>
  </div>
  <!-- Copyright -->
</footer>
 </body>
 </html>
