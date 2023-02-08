<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>




  <div class="All" id="Display">

    <h1 class="bg-danger p-3 text-white text-center m-2 ">Display Student Record</h1>

    <div class="d-flex p-2 ">
<?php 
include 'dbconn.php';
// student from databae_name
$sql = "SELECT * FROM student "; 
// connection from dbconn.php
if($result = mysqli_query($connection,$sql)){
// echo "query inserted successful";

if(mysqli_num_rows($result) > 0){
  echo "<table class='table table-bordered table-striped text-center ' border='1' >";

  echo "<thead class='thead-dark' >";
  echo "<tr>";
  echo "<th>S.N</th>";
  echo "<th>Student's Name</th>";
  echo "<th>Father's Name</th>";
  echo "<th>Mother's Name</th>";
  echo "<th>E-mail</th>";
  echo "<th>Date Of Birth </th>";
  echo "<th>Gender</th>";
  echo "<th>Nationality</th>";
  echo "<th>Contact</th>";
  echo "<th>Address </th>";
  echo "<th>Your Course</th>";
  echo "<th> Photo </th>";
  echo "<th> Action </th>";
  echo "</tr>";
  echo "</thead>";

  echo "<tbody>";

  // mysqli_fetch_array is used to fetch data from database into array form
  while($row = mysqli_fetch_array($result)){  // $result from line-44
  echo "<tr>";
  // $row['.....'] from database_table
  echo "<th>" . $row['S.N']. "</th>";
  echo "<td>" . $row['std_name']. "</td>";
  echo "<td>" . $row['fathers_name']. "</td>";
  echo "<td>" . $row['mothers_name']. "</td>";
  echo "<td>" . $row['email']. "</td>";
  echo "<td>" . $row['Date of birth']. "</td>";
  echo "<td>" . $row['Gender']. "</td>";
  echo "<td>" . $row['Nationality']. "</td>";
  echo "<td>" . $row['Contact']. "</td>";
  echo "<td>" . $row['Adress']. "</td>";
  echo "<td>" . $row['Your_course']. "</td>";
  ?>
  <td >. <img src="<?php echo $row['photo']?>" style="height: 150px; width:150px;" >. </td>;
  <?php
// ? is used to global variable
   // create new id --- id
  echo "<td> <a href='update_form.php?id=".$row['S.N']." '> <button class='btn btn-danger p-4'>Update</button></a>";
  echo "  <a href='delete_form.php?id=".$row['S.N']."'><button class='btn btn-primary p-4'>Delete</button></a></td>";
  echo "</tr>"; 
  }

  echo "<tbody>";
  echo "</table>";
}

  else{
    echo "opps ! Sorry";
  }

}

else{
  echo "Sorry Your Data is not inserted";
}



 ?>

</div>

</body>
</html>