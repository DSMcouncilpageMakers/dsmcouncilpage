<?php
  $id = $_SESSION['id'];
  $pw = $_SESSION['pw'];
  $salt = 'G*/*FD#%^H%^*IU*%^E$RU';
  $md5 = hash('md5','$pw.$salt');
  $userpw = hash('sha256','$pw.$md5.$salt');
  echo $userpw;
/*
  include 'database.php';
  $query = "SELECT * FROM user_log";
  $db_conn ->query($query); */
 ?>
