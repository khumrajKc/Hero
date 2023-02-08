<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saraswati";
$connection =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$connection) {

  die('error occure due to'. mysqli_connect_error());

}


