<!DOCTYPE html>
<html>
<body>

<?php

include "db_connect.php"

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
  echo "<td><img class='msgimage' src='" . $row['thumbnail'] . "' onclick='showBigImage(\"" . $row['image'] . "\")'/></td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
