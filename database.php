<?php
$db_conn = @mysqli_connect("localhost", "root", "password", "board");

if (!$db_conn) {
    $error = mysqli_connect_error();
    $errno = mysqli_connect_errno();
    print "$errno: $error\n";
    exit();
}
?>