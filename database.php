<?php @$db = new mysqli('localhost', 'root', 'sda1628sda', 'board');
  if (mysqli_connect_errno()) {
    echo "<p><h1>Error: Could not be connected to database.</br>
    Please try again later</h1></p>";
    exit;
  }
?>
