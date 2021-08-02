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
      break;
    case "2":
      $month = "fev.";
      break;
    case "3":
      $month = "mar.";
      break;
    case "4":
      $month = "avr.";
      break;
    case "5":
      $month = "mai";
      break;
    case "6":
      $month = "juin";
      break;
    case "7":
      $month = "juil.";
      break;
    case "8":
      $month = "août";
      break;
    case "9":
      $month = "sep.";
      break;
    case "10":
      $month = "oct.";
      break;
    case "11":
      $month = "nov.";
      break;
    case "12":
      $month = "dec.";
      break;
  }
  echo "<p class='msgname'>" . $row['name'] . ", <span class='timestamp'> " . date('j ', $time) . $month . " à " . date('G:i', $time) . "</span></p>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}
echo "</div>";
mysqli_close($con);
?>
</body>
</html>
