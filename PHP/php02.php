<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>변수선언 방법</title>
	<script type="text/javascript">
		//변수명에 javascript를 저장하고 출력!
		var x = "javascript"
		document.write(x);
		document.write("<br>");
		document.writeln("나는 "+ x +"를 배우고 있습니다.");
		document.write("<br><br>");
	</script>
</head>
<body>
	<?php 
		$php = "PHP";
		echo $php;
		echo "<br>";
		echo "나는 ".$php."를 배우고 있습니다.";
		echo "<br>";
		echo "나는 {$php}를 배우고 있습니다.";
		echo "<br>";
		echo "나는 \"PHP\"를 배우고 있습니다.";
		echo "<br>";
		echo "나는 \$15를 사용했습니다.";
	?>
</body>
</html>