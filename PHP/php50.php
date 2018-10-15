<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	session_start();

	//세션 생성
	$_SESSION['mySession2'] = 'webs';

	echo "세션 생성 후 존재 여부 확인 <br>";
	if(isset($_SESSION['mySession2'])){
		echo "mySession2 세션이 존재합니다. <br>";
	} else {
		echo "mySession2 세션이 존재하지 않습니다. <br>";
	}

	//세션 삭제
	unset($_SESSION['mySession2']);

	echo "세션 삭제 후 존재 여부 확인 <br>";
	if(isset($_SESSION['mySession2'])){
		echo "mySession2 세션이 존재합니다. <br>";
	} else {
		echo "mySession2 세션이 존재하지 않습니다. <br>";
	}
?>
</body>
</html>