<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>데이터형</title>
</head>
<body>
	<?php
		$num = 12;
		echo "변수 \$num 데이터형(값 {$num})은 " . gettype($num) . "입니다.<br />";

		$greeting = "안녕";
		echo "변수 \$greeting 데이터형(값 {$greeting})은 ". gettype($greeting) . "입니다.<br />";

		$numStr = "121212";
		echo "변수 \$numStr 데이터형(값 {$numStr})은 ". gettype($numStr) . "입니다.<br />";

		$fruit = array();
		echo "변수 \$fruit 데이터형(값 {$fruit})은 ". gettype($fruit) . "입니다.<br />";

		$na = null;
		echo "변수 \$na 데이터형(값 {$na})은 ". gettype($na) . "입니다.<br />";

		$boolean = true;
		echo "변수 \$boolean 데이터형(값 {$boolean})은 ". gettype($boolean) . "입니다.<br />";

	?>
</body>
</html>