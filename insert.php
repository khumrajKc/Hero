<?php 

// create connection with database
 // set a variables


include 'dbconn.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST['stdname'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $email = $_POST['email'];
    $DOB = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $contactnum = $_POST['contact'];
    $currentadd = $_POST['address'];
    $course = $_POST['course'];
    $cour = implode(',' , $course);
    $filename = $_FILES['image']['name'];
    $temp_location = $_FILES['image']['tmp_name'];
    $folder= "image/".$filename;
    // echo $folder;
    move_uploaded_file($temp_location, $folder);



    $insert  = "INSERT INTO `student` (`std_name`, `fathers_name`, `mothers_name`, `email`, `Date of birth`, `Gender`, `Nationality`, `Contact`, `Adress`,`Your_course`,`photo` , `Date & TIme`) VALUES ('$name', '$fathername', '$mothername', '$email', '$DOB', '$gender', '$nationality', '$contactnum', '$currentadd','$cour','$folder', current_timestamp())";

    if (mysqli_query($connection,$insert)) {
         echo '<script type="text/javascript">';
         echo 'alert (" insert Successful  !")';
         echo '</script>';
         echo '<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/BG_Project/index.php">';
        
  }

  else{
    echo "ERROR: $insert <br>" .mysqli_error($connection);
    mysqli_close($connection);
}

}



?>