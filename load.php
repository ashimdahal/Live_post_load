<?php
$conn = mysqli_connect('localhost','root','','test');
$sql = "SELECT * FROM post ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class = 'p-2'>";
  echo $row['posted'];
  echo "</div>";
}

 ?>
