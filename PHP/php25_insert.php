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


	//아이디 검증
	if($_POST['userID'] == ' ' || $_POST['userID'] == null){
		echo "해당 값을 사용할 수 없습니다. 2.ID";
		exit;
	}
	$userID = $_POST['userID'];
	$userID = trim($userID);
	$userID = $dbConnect->real_escape_string($userID);

	
	//패스워드 검증
	if($_POST['userPW'] == ' ' || $_POST['userPW'] == null){
		echo "해당 값을 사용할 수 없습니다. 3.PW";
		exit;
	}
	$userPW = sha1("dlw".$_POST['userPW']);

	//성별 검증
	if($_POST['userGender'] == 'm' || $_POST['userGender'] == 'w'){
		$userGender = $_POST['userGender'];
	} else {
		echo "해당 값을 사용할 수 없습니다. 4.Gender";
		exit;
	}

	//이메일 유효성 검사
	$emailCheck = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);
	if($emailCheck == false){
		echo "해당 값을 사용할 수 없습니다. 5";
		exit;
	}
	$userEmail = $_POST['userEmail'];

	//쿼리문 작성
	$sql = "INSERT INTO myMember(useID, uname, upassword, email, gender) VALUES";
	$sql .= "('{$userID}', '{$userName}', '{$userPW}', '{$userEmail}', '{$userGender}')";

	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
		echo "회원 가입 정보 입력 완료 (Ok)";
	} else {
		echo "회원 가입 정보 입력 실패 (Fail)";
	}

?>

