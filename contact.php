<?php 
include 'bootstrap.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<style>




</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
        <a class="nav-link bg-dark text-white" href="index.php">Home </a>
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
</div>

  <div class="row">

    <div class="col-md-6 ml-5">
    <h2 class="">Contact Us </h2>
    <p>Contact us by filling out the form below.</p>

  <form>
  <div class="form-group">
    <label >First Name* </label>
    <input type="text" class="form-control" >
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Last Name* </label>
    <input type="text" class="form-control" id="formGroupExampleInput2">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">E-mail* </label>
    <input type="email" class="form-control" id="formGroupExampleInput2">
  </div>

  <div class="form-group">
    <label>Message*</label><br>
    <textarea style="width:60%; height: 200px;"></textarea>
  </div>

  <div>
   <button type="submit" class="btn p-3 mb-3" style="border:1px solid black; border-radius: 5px; width:15%;">Send</button>
  </div>

</form>
</div>

  <div class="col-md-5 m-5">

  
  


<div class="polaroid">
  <img src="image/laptop.jpg" alt="Norway" style="width:100%">
  <div class="content">
    <a href="#">Apply</a>
  </div>
</div>

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