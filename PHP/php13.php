<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>foreach문</title>
</head>
<body>
		<?php
		$member = array();

		//member 배열에 0 인덱스를 생성하고 인덱스도 배열로 선언
		$member[0] = array();
		$member[0]['name'] = '이진희';
		$member[0]['userID'] = 'qwerqldk';
		$member[0]['email'] = 'qwerqldk@naver.com';

		$member[1] = array();
		$member[1]['name'] = '김진희';
		$member[1]['userID'] = 'eldkfjc';
		$member[1]['email'] = 'eldkfjc@naver.com';

		$member[2] = array();
		$member[2]['name'] = '박진희';
		$member[2]['userID'] = 'clsldkeoe';
		$member[2]['email'] = 'clsldkeoe@naver.com';

		$member[3] = array();
		$member[3]['name'] = '최진희';
		$member[3]['userID'] = 'blwkdd';
		$member[3]['email'] = 'blwkdd@naver.com';

		// for($i = 0; $i < count($member); $i++){
		// 	echo $member[$i]['name']."<br>";
		// 	echo $member[$i]['email']."<br>";
		// }

		foreach ($member as $data) {
			echo $data['name']."<br>";
		}
	?>
</body>
</html>