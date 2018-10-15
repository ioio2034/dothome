<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Switch문</title>
</head>
<body>
	<?php
		$data = "hello";

		switch ($data) {
			case 'annyung':
				echo "한국어 인사입니다.";
				break;

			case 'konnichiwa':
				echo "일본어 인사입니다.";
				break;

			case 'hello':
				echo "영어 인사입니다.";
				break;
			
			default:
				echo "한국어, 일본어, 영어 인사가 아닙니다.";
				break;
		}
	?>
</body>
</html>