<?php
  $id = $_POST['id'];
  $password = $_POST['pw'];

  include 'logindata.php';

  $query = "SELECT pw FROM user_log WHERE id LIKE ?";
  
  $stmt = mysqli_prepare($db_conn, $query);
  if($stmt === false){
    echo('Statement 생성 실패: '.mysqli_error($db_conn));
    exit();
  }

  $bind = mysqli_stmt_bind_param($stmt, "s", $id);
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
  if($result){#여기 부분은 추후에 바꿀 예정
    echo ('조회된 행의 수: '.mysqli_num_rows($result).'<br />');

    while($row = mysqli_fetch_assoc($result)){
      printf("%s <br />",$row["pw"]);
    }

    mysqli_free_result($result);

    mysqli_stmt_close($stmt);
  } else {
    echo ('Error: '.mysqli_error($db_conn));
    exit;
  }
?>
