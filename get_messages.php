<!DOCTYPE html>
<html>
<body>

<?php

$con = mysqli_connect('localhost','cassecouille','plantemangagourdexylophone','cassecouille', 3006, '/media/pi/external_drive/mysql_data/mysql.sock');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM messages";
$result = mysqli_query($con,$sql);

echo "<table id='messages'>
<tr>
<th>name</th>
<th>message</th>
<th>image</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "<td><img src='" . $row['thumbnail'] . "' onclick='showBigImage(\"" . $row['image'] . "\")'/></td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
