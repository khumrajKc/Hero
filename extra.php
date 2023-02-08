<?php

$servername="localhost";
$username="root";
$password="";
$database = "mydb";

//create connection
$conn = mysqli_connect($servername, $username,$password,$database);
// check connection
if($conn-> connect_error){
die ("connection failed:".$conn->connect_error);
}
else{
echo ("connected successfully !");
}
 // create database
$sql="CREATE DATABASE mydb";
if($conn->query($sql)===TRUE){
	echo "Database created successfully";
}
else {
	echo "error creating database:".$conn->error;
}
//sql to create table
$sql="CREATE TABLE std
    (id int not null auto_increment ,
	firstname VARCHAR (30),
	lastname VARCHAR (30),
	email VARCHAR (50)
	)";
if($conn-> query ($sql)=== TRUE){

	echo"table MYGuests created successfully";

}
else
{
	echo "error creating table :".$conn->error;
}

$sql="INSERT INTO std(firstname,lastname,email) VALUES('sita', 'dangi','dangi4@gmail.com')";

if ($conn->query ($sql)===TRUE){
	echo "new record created successfully";
}
else{
	echo"error:".$sql."<br>".$conn->error;
}
$conn->close();
?>