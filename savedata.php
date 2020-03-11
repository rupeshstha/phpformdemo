<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$title = $price = $model_number= $concept= $category= $available_size= $avilable_color= $details= $sub_category= $featured_on= $other_details=''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $price = $_POST["price"];
  $model_number = $_POST["model_number"];
  $concept = $_POST["concept"];
  $category = $_POST["category"];
  $available_size = $_POST["available_size"];
  $avilable_color = $_POST["avilable_color"];
  $details = $_POST["details"];
	$sub_category = $_POST["sub_category"];
	$featured_on = $_POST["featured_on"];
	$other_details = $_POST["other_details"];

}
// //
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO products (title, price, model_number, concept, category, available_size, avilable_color, details, sub_category, featured_on, other_details)
VALUES ($title, $price, $model_number, $concept, $category, $available_size, $avilable_color, $details, $sub_category, $featured_on, $other_details)";

// $conn->close();
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Test Data </title>
 </head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <body>
 	
<form action="" method="$_SERVER["REQUEST_METHOD"]" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6 form-group">
			<input type="text" name="title" placeholder="Title" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="price" placeholder="Price" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="model_number" placeholder="model_number" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="concept" placeholder="concept" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="category" placeholder="category" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="available_size" placeholder="available_size" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="avilable_color" placeholder="avilable_color" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="details" placeholder="details" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="sub_category" placeholder="sub_category" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="featured_on" placeholder="featured_on" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="other_details" placeholder="other_details" class="form-control">
		</div>
		<div class="col-md-12 form-gorup">
			<input type="file" name="image">
		</div>
		<input type="submit" class="btn btn-success">

	</div>
</form>


 </body>
 </html>