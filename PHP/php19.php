<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>explode</title>
</head>
<body>
	<?php
		$email = "jinhee@naver.com";
		$emailArray = explode("@", $email);

		echo "<pre>";
		var_dump($emailArray);

		echo "<br>";
		echo $emailArray[1];
	?>
</body>
</html>