<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>おみくじアプリ</title>
</head>
<body>
  <h2>今日の運勢を占う</h2>
	<form method="post">
		<button type="submit">おみくじを引く</button>
	</form>
	<?php if($_SERVER["REQUEST_METHOD"] == "POST") {
		$results = ["大吉", "中吉", "小吉", "吉", "凶", "大凶"];
		$fortune = $results[array_rand($results)]; // 結果をランダムに取得

		echo "<h3>結果：{$fortune}</h3>";
	}
	
	?>
</body>
</html>