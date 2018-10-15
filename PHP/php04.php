<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>array_push 선언 방법</title>
</head>
<body>
	<?php
		$fruit = array();
		array_push($fruit, 'apple', 'banana', 'grape', 'coconut', 'melon');

		echo $fruit[0]."<br>";
		echo $fruit[1]."<br>";
		echo $fruit[2]."<br>";
		echo $fruit[3]."<br>";
		echo $fruit[4]."<br>";
	?>
</body>
</html>