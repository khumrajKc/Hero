<?php 
include 'bootstrap.php';
error_reporting(0);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  
    
</head>
<body>

<div class="course py-2 bg-success text-white m-3">

  <form action="#" method="POST" enctype="multipart/form-data" style="padding: 10px;">

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" >
  </div>

  

  <div class="form-group">
    <label>Content</label>
    <input type="text" name="content" class="form-control">
  </div>

  <div class="form-group">
    <label>Photo</label>
    <input type="file" class="form-control-file" name="image">
  </div>

  <button type="submit" class="btn btn-primary my-3 py-3" style="margin-left: 10px;">Submit</button>
</form>
 </div>

 <?php  


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saraswati";
$connection =  mysqli_connect($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    // print_r($_FILES['image']);
    $filename = $_FILES['image']['name'];
    $temp_location = $_FILES['image']['tmp_name'];
    $folder= "image/".$filename;
    // echo $folder;
    move_uploaded_file($temp_location, $folder);

  $insert = "INSERT INTO `course` (`title`,`content`,`photo`) VALUES ( '$title', '$content','$folder')";

if (mysqli_query($connection,$insert)) {
   echo '<script type="text/javascript">';
            echo ' alert("Insert Success !")'; 
            echo '</script>';

            echo '<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/BG_Project/index.php">';
             
  }


  else{
    echo "ERROR: $insert <br>" .mysqli_error($connection);
    mysqli_close($connection);
    }


}

?>




</body>
</html>