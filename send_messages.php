<?php
error_log(print_r($_FILES, true));
error_log(print_r($_POST, true));
$name = $_POST["name"];
$message = $_POST["message"];

// get the temporary name that PHP gave to the uploaded file
$image = $_FILES["image"]["tmp_name"];
$new_filename = uniqid(rand(), true);
$new_image = "/var/www/casse-couille.fr/user_images/" . $new_filename;
move_uploaded_file($image, $new_image);
$thumbnail = $_FILES["thumbnail"]["tmp_name"];
$new_thumbnail = "/var/www/casse-couille.fr/user_images/thumbnails/t_" . $new_filename;
move_uploaded_file($thumbnail, $new_thumbnail);

include "db_connect.php";

error_log("INSERT INTO messages(name, message, image, thumbnail) VALUES('$name', '$message', '$new_image', '$new_thumbnail');");
$sql="INSERT INTO messages(name, message, image, thumbnail) VALUES('$name', '$message', '$new_image', '$new_thumbnail');";
$result = mysqli_query($con,$sql);
error_log(print_r(mysqli_error($con), true));
mysqli_close($con);
?>
