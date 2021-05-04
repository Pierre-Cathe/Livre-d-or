<?php
error_log(print_r($_FILES, true));
error_log(print_r($_POST, true));
$name = $_POST["name"];
$message = $_POST["message"];
$new_image = NULL;
$new_thumbnail = NULL;

if (array_key_exists("image", $_FILES))
{
  // get the temporary name that PHP gave to the uploaded file
  $image = $_FILES["image"]["tmp_name"];
  $new_filename = uniqid(rand(), true);
  $new_image = "user_images/" . $new_filename;
  move_uploaded_file($image, $new_image);
  chmod($new_image, 0777);
  $thumbnail = $_FILES["thumbnail"]["tmp_name"];
  $new_thumbnail = "user_images/thumbnails/t_" . $new_filename;
  move_uploaded_file($thumbnail, $new_thumbnail);
  chmod($new_thumbnail, 0777);
}

include "db_connect.php";

error_log("INSERT INTO messages(name, message, image, thumbnail) VALUES('$name', '$message', '$new_image', '$new_thumbnail');");
$sql="INSERT INTO messages(name, message, image, thumbnail) VALUES('$name', '$message', '$new_image', '$new_thumbnail');";
$result = mysqli_query($con,$sql);
error_log(print_r(mysqli_error($con), true));
mysqli_close($con);
?>
