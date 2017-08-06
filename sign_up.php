<?php
    $id = $_POST['id'];
    $password = $_POST['pw'];
    $email = $_POST['email'];

    $db_conn = @mysqli_connect("localhost","root","sda1628sda","user");
    if (!$db_conn) {
    $error = mysqli_connect_error();
    $errno = mysqli_connect_errno();
    print "$errno: $error\n";
    exit();
    }

    $query = "INSERT INTO user_data VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($db_conn, $query);
    if($stmt === false){
    echo('Statement 생성 실패: '.mysqli_error($db_conn));
    exit();
  }

  $bind = mysqli_stmt_bind_param($stmt, "sss", $id,$password,$email);
  if($bind === false) {
    echo('파라미터 바인드 실패 : ' . mysqli_error($db_conn));
    exit();
  }


  $exec = mysqli_stmt_execute($stmt);
  if($exec === false){
    echo ('쿼리 실행 실패: '.mysqli_error($db_conn));
    exit();
  }
  $result = mysqli_stmt_get_result($stmt);
  echo $result;
  
  mysqli_free_result($result);
  mysqli_stmt_close($stmt);
  echo "성공적으로 글 쓰기 성공";
?>