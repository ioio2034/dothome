<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>str_replace</title>
</head>
<body>
	<?php
		$str = "Hello World";
		$changeWord = str_replace("World", "Jin Hee", $str);

		echo $changeWord;
	?>
</body>
</html>