
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Test Data </title>
 </head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <body>
 	
<form action="savedata.php" method="post" enctype="multipart/form-data">
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
			<input type="file" name="files[]" multiple>
		</div>
		<input type="submit" name="submit" class="btn btn-success">

	</div>
</form>

<?php 

if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    // include_once 'config.php'; 


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
$files = $_FILES['files'];



// if ($files) {
// 	$img_arr = [];
// 	foreach ($Files	 as  $image) {
		
// 			$extension = @explode(".", $image);

// 			var_dump($extension);

// 			$name = time().rand(100,99).'.'.$extension;
// 			$location = 'photo_gallery/'.date('FY');
// 			$image->move_uploaded_file('photo_gallery/'.$location.$name);
// 			$img_arr[] = $location.$name; 
// 	}
// 	$save_img['files'] = json_encode($img_arr); 
// }

		// var_dump($_POST);

$servername="localhost";
$username="root";
$password="";
$dbname="demo";

$conn= mysqli_connect($servername,$username,$password,$dbname);

// var_dump($conn->conn_error);

$uploaded_images = array();
foreach($_FILES['files']['name'] as $key=>$val){
	$upload_dir = "photo_gallery/";
	$upload_file = $upload_dir.$_FILES['files']['name'][$key];
	$filename = $_FILES['files']['name'][$key];
if(move_uploaded_file($_FILES['files']['tmp_name'][$key],$upload_file)){
$uploaded_images[] = $upload_file;
// $insert_sql = "INSERT INTO uploads(id, file_name, upload_time)
// VALUES('', '".$filename."', '".time()."')";

// mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn));



}
}  
 $query="INSERT INTO `products`(`title`, `price`, `model_number`, `concept`, `category`, `available_size`, `available_color`, `details`, `sub_category`, `featured_on`, `other_details`, `image`,`created_at`) VALUES ('$title','$price', '$model_number', '$concept', '$category', '$available_size', '$avilable_color', '$details', '$sub_category', '$featured_on', '$other_details', '$filename',".time().")";

$query_run = mysqli_query($conn, $query);

    
     
     var_dump($query_run);
     
    // File upload configuration 
    // $targetDir = "uploads/"; 
    // $allowTypes = array('jpg','png','jpeg','gif'); 
     
    // $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    // $fileNames = array_filter($_FILES['files']['name']); 
    // if(!empty($fileNames)){ 
    //     foreach($_FILES['files']['name'] as $key=>$val){ 
    //         // File upload path 
    //         $fileName = basename($_FILES['files']['name'][$key]); 
    //         $targetFilePath = $targetDir . $fileName; 
             
    //         // Check whether file type is valid 
    //         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    //         if(in_array($fileType, $allowTypes)){ 
    //             // Upload file to server 
    //             if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
    //                 // Image db insert sql 
    //                 $insertValuesSQL .= "('".$fileName."', NOW()),"; 
    //             }else{ 
    //                 $errorUpload .= $_FILES['files']['name'][$key].' | '; 
    //             } 
    //         }else{ 
    //             $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
    //         } 
    //     } 
         
    //     if(!empty($insertValuesSQL)){ 
    //         $insertValuesSQL = trim($insertValuesSQL, ','); 
    //         // Insert image file name into database 
    //         $insert = $db->query("INSERT INTO products (image) VALUES $insertValuesSQL"); 
    //         if($insert){ 
    //             $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
    //             $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
    //             $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
    //             $statusMsg = "Files are uploaded successfully.".$errorMsg; 
    //         }else{ 
    //             $statusMsg = "Sorry, there was an error uploading your file."; 
    //         } 
    //     } 
    // }else{ 
    //     $statusMsg = 'Please select a file to upload.'; 
    // } 
     
    // // Display status message 
    // echo $statusMsg; 
}
 ?>


 </body>
 </html>