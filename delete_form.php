
 <?php 
 
include 'dbconn.php';
$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE  `S.N` = $id";
$result = mysqli_query($connection,$sql);
 
           if($result)
           {
            echo '<script type="text/javascript">';
            echo ' alert("Delete Success !")'; 
            echo '</script>';

            echo '<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/BG_Project/display.php">';
}


  ?>