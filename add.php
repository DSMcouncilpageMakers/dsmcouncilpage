<?php
	if(!isset($_POST['title'])){
		echo ("<script>
			window.alert('제목을 입력해 주세요');
			history.go(-1)
		</script>");exit;
	}
	if(!isset($_POST['contents'])){
		echo ("<script>
			window.alert('내용을 입력해 주세요');
			history.go(-1)
		</script>"); exit;
	}

	$title = $_POST['title'];
	$contents = $_POST['contents'];

	include("database.php");
	$query = "INSERT INTO notice(Title,Contents) VALUES('$title','$contents')";
	$db_conn ->query($query);
	print("기록되었습니다.");
?>
