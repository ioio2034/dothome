<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	
	$filePathName = "./myFiles/largeRow.php";
	$content = $_POST['myInputText'];	//post방식으로 변수 content에 데이터 저장

	$fp = fopen($filePathName, 'w');	//파일 열기
	if($fp){
		$fw = fwrite($fp, $content);
		if($fw){
			echo "파일 쓰기 완료";
		}
	}

?>
</body>
</html>