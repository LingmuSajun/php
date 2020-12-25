<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>フォームからデータを受け取る</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>今日の運勢</h2>
<pre>
	<?php $birthDate = $_GET["comment/"]; ?>
	<?php $rand = mt_rand(1, 10); ?>

	誕生日は<?php print($birthDate); ?>です<br/>
	<?php
		$result = '最低';
		if($birthDate % $rand == 0) {
			$result = '最高';
		} elseif($birthDate % $rand == 1) {
			$result = '普通';
		}
	?>

	今日の運勢は<?php print($result); ?>です
</pre>
</main>
</body>
</html>