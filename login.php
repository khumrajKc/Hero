

<?php 
$login = false;
$showError = false;

include 'dbconn.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
$name =$_POST['user'];// user is form insert_form.php, line-104

$password = $_POST['password'];// password is form insert_form.php, line-110


$sql = "SElECT * FROM `login` where username ='$name' || password = '$password' ";
$query = $connection->query($sql);
$num = mysqli_num_rows($query);
if($num==1) {

$login = true;
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $name;
header("location:display.php");

} 
else {

$showError = "Invalid Credentials";
header("location:insert_form.php");

}
mysql_close($connection);




}
 ?>