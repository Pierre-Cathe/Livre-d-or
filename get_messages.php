<!DOCTYPE html>
<html>
<body>

<?php

$con = mysqli_connect('localhost','cassecouille','plantemangagourdexylophone','cassecouille');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM messages;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Nom</th>
<th>Message</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'/></td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
