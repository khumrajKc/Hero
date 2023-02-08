
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<link rel="" type="text/css" href="C:\xampp\htdocs\bootstrap\css">

<script type="text/javascript" src="C:\xampp\htdocs\bootstrap\js"></script>
  <?php 
  include 'bootstrap.php';
  if (!isset ($_SESSION['loggedin']) || $_SESSION['loggedin'] ==  FALSE ) {
       // echo '<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/coding/second.php">';
  }

  ?>

  <style>
    form label{
      font-size:33px ;
      color: white;
    }
    body{
      background: black ;
      color: black;
    }

    .form-control{
      height: 3.5rem;
      font-size: 2.3rem;
    }

    .check-box{
      height: 20px;
      width: 20px;
    }

    a{
    margin-right: 30px;
    text-decoration: none;
    font-size: 26px;
    color: maroon;
    padding: 10px;
    margin: 10px;
    }
  </style>

  <div class="row bg-danger p-10 m-3" style="background: gray; padding:10px;">
   <div class="col-md-4">
    <h1 class="text-center" style="margin-top:10px; color: white;">Bg Educational Foundation</h1>
  </div>

  <div class="col-md-8">
    <nav class="navbar navbar-expand-lg m-10">

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link bg-dark text-white" href="index.php">Home </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link bg-primary text-white " href="insert_form.php">Admission Form</a>
      </li>

      <li class="nav-item">
        <a class="nav-link bg-secondary text-white" href="about.php">About </a>
      </li>

      <li class="nav-item">
        <a class="nav-link bg-success text-white" href="contact.php">Contact</a>
      </li>
    </ul>

</div>
</nav>
  </div>
</div>
<!--
  <div class="col-md-2">
    <button type="button" class="btn btn-dark p-3" style="border:3px solid black; margin-top: 10px;" data-toggle="modal" data-target="#mymodal">
    <i class="fa-solid fa-user"></i>
    </button>
  -->

    <!-- Modal -
    <div class="modal fade" id="mymodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title">SignUp</h5>
           <button type="button" class="close" data-dismiss="modal">
             <span>&times;</span>
           </button>
         </div>
       -->


         <!-- modal-body  
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
     -->
       <!-- modal footer
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</head>
-->
<body>
  <div class="container p-3">
    <!-- heading start -->

    <div class="p-3 bg-primary">
     <h2 class="text-center bg-info p-2"><u>WELCOME</u></h2>

     
     <!-- form start -->

     <form action="insert.php" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label>Student's Name:</label>
        <input type="text" class="form-control" name="stdname">
      </div>

      <div class="form-group">
        <label>Father's name</label>
        <input type="text" class="form-control" name="fathername">
      </div>



      <div class="form-group">
        <label>Mother's  name</label>
        <input type="text" class="form-control" name="mothername">
      </div>

      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="email">
      </div>

      

      <div class="form-group">
        <label>Date Of Birth</label>
        <input type="date" class="form-control" name="dob">
      </div>

      
      <div class="row">
       <div class="col-md-4">
        <label >Gender :</label><br>
        <input class="check-box" type="radio" name="gender" value="male" ><label>Male</label><br>
        <input class="check-box" type="radio" name="gender" value="female" ><label>Female</label>
        <br>

      </div>
      <div class="col-md-8">
        <label>Nationality</label>
        <input class="form-control" type="text" name="nationality">
      </div>
    </div>

    <div class="form-group">
      <label>Contact Number</label>
      <input type="number" class="form-control" name="contact">
    </div>

    <div class="form-group">
      <label>Current Adress</label>
      <input type="location" class="form-control" name="address">
    </div>

    <label>Select Your Courses:</label><br>
    <input type="checkbox" value="PHP" class="check-box" name="course[]"><label>PHP</label><br>
    <input type="checkbox" value="Web" class="check-box" name="course[]"><label>Web Programming</label><br>
    <input type="checkbox" value="Computer Basic" class="check-box" name="course[]"><label>Computer Diploma</label><br>
    <input type="checkbox" value="Graphics" class="check-box" name="course[]"><label>Graphics</label><br>
    <input type="checkbox" value="MobileApp" class="check-box" name="course[]"><label>Mobile Application Development</label><br> 

    <div class="form-group">
      <label>Photo :</label>
      <input type="file" class="form-control-file" name="image">
    </div>

    <button type="submit" class="btn btn-secondary p-4 text-white">Submit</button>
    
  </form>
</div>


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