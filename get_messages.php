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
  echo "<div class='messageContainer'>";
  if (!is_null($row['image']) && strcmp($row['image'], "") != 0)
  {

    echo "<img class='msgimage' src='" . $row['thumbnail'] . "' onclick='showBigImage(\"" . $row['image'] . "\")'/>";
  }
  echo "<div class='msgtext'>";
  echo "<p class='msgbody'>" . $row['message'] . "</p>";
  $time = strtotime($row['upload_date']);
  $month = "";
  switch (date('n', $time)) {
    case "1":
      $month = "jan.";
    case "2":
      $month = "fev.";
    case "3":
      $month = "mar.";
    case "4":
      $month = "avr.";
    case "5":
      $month = "mai";
    case "6":
      $month = "juin";
    case "7":
      $month = "juil.";
    case "8":
      $month = "août";
    case "9":
      $month = "sep.";
    case "10":
      $month = "oct.";
    case "11":
      $month = "nov.";
    case "12":
      $month = "dec.";
  }
  echo "<p class='msgname'>" . $row['name'] . ", <span class='timestamp'>le " . date('j/', $time) . $month . " à " . date('G:i', $time) . "</span></p>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}
echo "</div>";
mysqli_close($con);
?>
</body>
</html>
