<?php
	session_start();

	// タスク追加処理
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["task"])) { // POSTメソッドで、かつtaskが送信された場合
		$task = trim($_POST["task"]); // taskを取得
		if(!empty($task)) { // taskが空でない場合
			$_SESSION["tasks"][] = $task; // セッションに保存
		}
	}

	// タスク削除処理
	if(isset($_GET["delete"])) { // deleteが送信された場合
		$deleteIndex = $_GET["delete"];
		if(isset($_SESSION["tasks"][$deleteIndex])) { // 指定のタスクが存在する場合
			array_splice($_SESSION["tasks"], $deleteIndex, 1); // 指定のタスクを削除
		}
		header("Location: TodoList.php"); // リダイレクト(?delete=1のパラメータが付与されるため)
    exit; // リダイレクト後にスクリプトを終了
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todoリスト</title>
</head>
<body>
	<h2>TODOリスト</h2>
	<form method="post">
		<input type="text" name="task" required placeholder="タスクを入力">
		<button type="submit">追加</button>
	</form>
	<h3>タスク一覧</h3>
	<ul>
		<?php 
			if(!empty($_SESSION["tasks"])) { // タスクがある場合
				foreach($_SESSION["tasks"] as $index => $task) { // タスクを表示
					echo "<li>{$task}<a href='?delete={$index}'>削除</a></li>"; // 削除リンクを表示
				}
			}
			else {
				echo "<li>タスクはありません。</li>";	
			}
		?>
	</ul>
</body>
</html>