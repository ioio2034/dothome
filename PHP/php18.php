<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>substr</title>
</head>
<body>
	<?php
		$fileName = "devilcat.jpg";

		$execute = substr($fileName, -4, 4);

		if($execute == '.jpg' || $execute == '.png' || $execute == '.gif'){
			echo "업로드한 파일은 이미지 파일입니다.";
		} else {
			echo "업로드한 파일은 이미지 파일이 아닙니다.";
		}
	?>
</body>
</html>