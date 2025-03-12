<?php 
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
		$message = trim($_POST["message"]);
		$name = trim($_POST["name"]);
		if(!empty($message) && !empty($name)) {
			$_SESSION["lists"][] = ["name" => $name, "message" => $message]; 
			// ↑　連想配列を追加
			// $_SESSION["lists"][]の[]は配列の末尾に追加するという意味。これがないと上書きされてしまう。
			//　["name" => $name, "message" => $message]; 　←　配列形式で「名前」と「メッセージ」を保存 します！
		}
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="content">
		<h1>掲示板</h1>
		<form method="post">
			<label>
				<p>名前：</p>
				<input type="text" name="name" placeholder="山田　太郎">
			</label>
			<label>
				<p>コメント：</p>
				<textarea name="message" placeholder="ここにテキストを入力してください"></textarea>
			</label>
			<button type="submit">送信</button>
		</form>
		<div class="comment_group">
			<?php 
				if(!empty($_SESSION["lists"])) {
					foreach($_SESSION["lists"] as $comment) {
						echo 
						"<div class='comment_box'>
							<p>名前：{$comment['name']}</p>
							<p>コメント：{$comment['message']}</p>
						</div>";
					}
				}
				else {
					echo "<p>投稿はありません。</p>";
				}
			?>
			<!-- <pre><//?php print_r($_SESSION); ?></pre> -->
		</div>
	</div>
</body>
</html>