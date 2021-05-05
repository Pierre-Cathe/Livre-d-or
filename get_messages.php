<!DOCTYPE html>
<html>
<body>

<?php

include "db_connect.php";

$sql="SELECT * FROM messages ORDER BY upload_date DESC";
$result = mysqli_query($con,$sql);

echo "<div id='messages'>";
while($row = mysqli_fetch_array($result)) {
  echo "<div class='message'>";
  if (!is_null($row['image']))
  {
    echo "<img class='msgimage' src='" . $row['thumbnail'] . "' onclick='showBigImage(\"" . $row['image'] . "\")'/>";
  }
  echo "<div class='msgtext'>";
  echo "<p class='msgbody'>" . $row['message'] . "</p>";
  echo "<p class='msgname'>" . $row['name'] . "</p>";
  echo "</div>";
  echo "</div>";
}
echo "</div>";
mysqli_close($con);
?>
</body>
</html>
