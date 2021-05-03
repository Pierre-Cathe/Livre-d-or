<?php
$con = mysqli_connect('localhost','cassecouille','plantemangagourdexylophone','cassecouille', 3006, '/media/pi/external_drive/mysql_data/mysql.sock');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
?>
