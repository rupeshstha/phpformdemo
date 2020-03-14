<?php 	
$servername="localhost";
$username="root";
$password="";
$dbname="demo";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	// echo "connection successfully";
}

else
{
	die("connection failed because".mysqli_connect_error());
}

 ?>