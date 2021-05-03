<?php

$name = $_POST["name"];
$message = $_POST["message"];

// get the temporary name that PHP gave to the uploaded file
$image = $_FILES["image"]["tmp_name"];
$new_filename = uniqid(rand(), true);
move_uploaded_file($image, "user_images/" . $new_filename);
$thumbnail = $_FILES["thumbnail"]["tmp_name"];
move_uploaded_file($thumbnail, "user_images/thumbnails/t_" . $new_filename);

include "db_connect.php";

error_log("INSERT INTO messages VALUES('" . $name . "', '" . $message . "', '" . $image . "', '" . $thumbnail . ");");
$sql="INSERT INTO messages VALUES('" . $name . "', '" . $message . "', '" . $image . "', '" . $thumbnail . ");";
$result = mysqli_query($con,$sql);

mysqli_close($con);
?>
