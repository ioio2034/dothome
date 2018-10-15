<?php
	//mysql 접속 소스를 include
	include_once "../connectDB.php";

	//데이터 입력
	$userID = "ioio2034";
	$name = "이진희";
	$userPW = "1234";
	$email = "ioo2034@naver.com";
	$birth = "1999-04-05";
	$gender = "w";

	//쿼리문 작성
	$sql = "INSERT INTO myMember(useID, uname, upassword, email, birthDay, gender, regTime) VALUES";
	$sql .= "('{$userID}','{$name}','{$userPW}','{$email}','{$birth}','{$gender}',NOW())";

	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
		echo "데이터 입력 완료ok";
	}else {
		echo "데이터 입력 실패fail";
	}


	//INSERT INTO myMember(useID, uname, upassword, email, birthDay, gender, regTime) VALUES('webs', '김장거', 'sdfsd', 'riluy@naver.com', '1936-04-05', 'm', now());
	

?>