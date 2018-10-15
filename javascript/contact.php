<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	
	//mysql 접속 소스를 include
	include_once "../connectDB.php";

	//post 방식으로 전달 받은 값 확인
	echo "<pre>";
	var_dump($_POST);

	//이름 검증
	if($_POST['userName'] == ' ' || $_POST['userName'] == null){
		echo "해당 값을 사용할 수 없습니다. 1.name";
		exit;
	}
	//데이터를 변수에 저장
	$userName = $_POST['userName'];
	//앞뒤 공백 제거
	$userName = trim($userName);
	//쿼리문의 따옴표 처리를 위해 real_escape_string 메소드 사용(따옴표 제거 후 데이터베이스에 저장)
	$userName = $dbConnect->real_escape_string($userName);


	//핸드폰 번호 검증
	if($_POST['userPhone'] == ' ' || $_POST['userPhone'] == null){
		echo "해당 값을 사용할 수 없습니다. 2.Phone";
		exit;
	}
	$userPhone = $_POST['userPhone'];
	$userPhone = $dbConnect->real_escape_string($userPhone);


	//이메일 유효성 검사
	$emailCheck = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);
	if($emailCheck == false){
		echo "해당 값을 사용할 수 없습니다. 3.Email";
		exit;
	}
	$userEmail = $_POST['userEmail'];

	//메세지 검증
	if($_POST['userMessage'] == ' ' || $_POST['userMessage'] == null){
		echo "해당 값을 사용할 수 없습니다. 4. message";
		exit;
	}
	$userMessage = $_POST['userMessage'];
	$userMessage = $dbConnect->real_escape_string($userMessage);


	//쿼리문 작성
	$sql = "INSERT INTO Contact(uname, uphone, email, message) VALUES";
	$sql .= "('{$userName}', '{$userPhone}', '{$userEmail}', '{$userMessage}')";

	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
		echo "메세지 전송 (Ok)";
	} else {
		echo "메세지 전송 실패 (Fail)";
	}
	?>
</body>
</html>