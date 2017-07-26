<?php
$db_conn = @mysqli_connect("localhost", "root", "password", "board");#password 부분은 따로 설정해놓음

if (!$db_conn) {
    $error = mysqli_connect_error();
    $errno = mysqli_connect_errno();
    print "$errno: $error\n";
    exit();
}
?>
