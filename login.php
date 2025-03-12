<?php
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_user = "abcabcweffsdf";
    $valid_pass = "abcabcweffsdfabcabcweffsdf"; // 本番ではハッシュ化するべき
    
    $user = strval($_POST["user_id"]); //変数の中身を文字列化
    $pass = strval($_POST["password"]);
    if($user === $valid_user && $pass === $valid_pass) {
      echo "ようこそ！ログイン成功しました！";
      $_SESSION["user"] = $user; // ログインした後も、ページを移動してもユーザー情報を保持できる！
      header("Location: sample.php"); //飛ばしたいページへ
      exit;

    } else {
      echo "ログインに失敗しました。";
    }
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>  
</head>
<body>
  <h1>ログイン画面</h1>
  <form method="post">
    <label>
      <p>ID：</p>
      <input type="text" name="user_id">
    </label>
    <label for="">
      <p>password:</p>
      <input type="password" name="password" minlength="6">
    </label>
    <input type="submit" value="ログイン">
  </form>
</body>
</html>