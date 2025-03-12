<?php
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy();
    header('Location: login.php');
    exit;

  }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>遷移後のページ</title>
</head>
<body>
  <h1>遷移後のページ<h1>
  <form method="post">
    <input type="submit" value="ログアウトする">
  </form>
</body>
</html>