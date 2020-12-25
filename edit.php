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
	<h6>生年月日</h6>
	<?php
		$error = $_GET["error"];
		if(intval($error) === 1) {
			print('生年月日を入力してください');
		} elseif(intval($error) === 2) {
			print('半角数字のみで入力してください');
		} elseif(intval($error) === 3) {
			print('8桁の数字を入力してください');
		}
	?>
	<form action="index.php" method="get">
		<input type="text" name="comment/"><br/>
		<input type="submit" value="送信">
	</form>
</pre>
</main>
</body>
</html>