<?php 
 include 'bootstrap.php';
 error_reporting(0);
 ?>

 <?php 

include 'dbconn.php';
// $_GET['....'] from display.php line-11
$id = $_GET['id'];
// `S.N` & `student` from database
$sql = "SELECT * FROM `student` WHERE  `S.N` = ".$id;
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);

  // course- convert to array form
$courses = $row['Your_course'];
$course = explode(",", $courses);



 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
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
  </style>
</head>
<body>


<div class="container p-3">
    <!-- heading start -->

    <div class="p-3 bg-primary">
     <h2 class="text-center bg-info p-2"><u>Update Students Details</u></h2>

     
     <!-- form start -->

     <form action="" method="POST" enctype="multipart/form-data">
<!-- $row['......']  from database name  -->
<!-- $row from line-11 -->
      <div class="form-group">
        <label>Student's Name:</label>
        <input type="text" class="form-control" name="stdname" value="<?php echo $row['std_name'] ?>">
      </div>

      <div class="form-group">
        <label>Father's name</label>
        <input type="text" class="form-control" name="fathername" value="<?php echo $row['fathers_name'] ?>">
      </div>

      <div class="form-group">
        <label>Mother's  name</label>
        <input type="text" class="form-control" name="mothername" value="<?php echo $row['mothers_name'] ?>">
      </div>

      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
      </div>

      

      <div class="form-group">
        <label>Date Of Birth</label>
        <input type="date" class="form-control" name="dob" value="<?php echo $row['Date of birth'] ?>">
      </div>

      
      <div class="row">
       <div class="col-md-4">
        <label >Gender :</label><br>
        <input class="check-box" type="radio" name="gender" value="male" <?php
                                if($row['Gender']== "male"){
                                    echo "checked";
                                }
                            ?> >
                            <label>Male</label><br>
        <input class="check-box" type="radio" name="gender" value="female" 
                            <?php
                                if($row['Gender']== "female"){
                                    echo "checked";
                                }
                            ?> >
                            <label>Female</label>
        <br>

      </div>
      <div class="col-md-8">
        <label>Nationality</label>
        <input class="form-control" type="text" name="nationality"  value="<?php echo $row['Nationality'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label>Contact Number</label>
      <input type="number" class="form-control" name="contact"  value="<?php echo $row['Contact'] ?>">
    </div>

    <div class="form-group">
      <label>Current Adress</label>
      <input type="location" class="form-control" name="address"  value="<?php echo $row['Adress'] ?>">
    </div>

    <label>Select Your language</label><br>

<!-- $course from line - 15 -->
    <input type="checkbox"  class="check-box" name="course[]" value="PHP" <?php
                        if(in_array('PHP', $course)){
                            echo "checked";
                        }
                    ?>>

                    <label>PHP</label><br>

    <input type="checkbox"  class="check-box" name="course[]" value="Web"<?php
                        if(in_array('Web', $course)){
                            echo "checked";
                        }
                    ?>>
                    <label>Web Programming</label><br>
    <input type="checkbox"  class="check-box" name="course[]" value="Computer Diploma"<?php
                        if(in_array('Computer Basic', $course)){
                            echo "checked";
                        }
                    ?>>

                    <label>Computer Diploma</label><br>
    <input type="checkbox" value="Graphics" class="check-box" name="course[]" <?php
                        if(in_array('Graphics', $course)){
                            echo "checked";
                        }
                    ?>><label>Graphics</label><br>
    <input type="checkbox" value="MobileApp" class="check-box" name="course[]" <?php
                        if(in_array('MobileApp', $course)){
                            echo "checked";
                        }
                    ?>><label>Mobile Application Development</label> 

                    <div class="form-group">
      <label>Photo :</label>
     <td> <input type="file" class="form-control-file" name="image"> <img src="<?php echo $row['photo'] ?>" style="height:100px; width: 100px;"></td><br>
    </div>
    <button type="update" class="btn btn-secondary p-4 text-white">Update</button>
    
  </form>
</div>


</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        // $_POST['...'] from insert_form.php-- input box -- name
        $student_name=$_POST['stdname'];
        $father_name=$_POST['fathername'];
        $mother_name=$_POST['mothername'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $nationality=$_POST['nationality'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $cour=$_POST['course'];
        $cours = implode(",",$cour);
         // image move code 

        $filename = $_FILES['image']['name'];  // 'image' is coming from input_name
        $temp_location = $_FILES['image']['tmp_name'];
        $folder= "image/".$filename;
        // echo $folder;
        move_uploaded_file($temp_location, $folder);
    

        $sql ="UPDATE `student` set `std_name`='$student_name',`fathers_name`='$father_name',`mothers_name`='$mother_name',`email`='$email',`Date of birth`='$dob',`Gender`='$gender',`Nationality`='$nationality',`Contact`='$contact', `Adress`='$address', `Your_course`='$cours',`photo` = '$folder', `Date & TIme`=current_timestamp()   WHERE `S.N` ='$id'";
        $result = mysqli_query($connection, $sql);
        if ($result){
            echo '<script type="text/javascript">';
            echo ' alert("Data Updated")'; 
            echo '</script>';
            
         echo '<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/BG_Project/display.php">';
            
        }
        else{
            echo"<script>alert(ERROR: $sql)</script> ";
        }
        
        

    }
   mysqli_close($connection);
?>
