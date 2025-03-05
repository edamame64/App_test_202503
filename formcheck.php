<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post">
    <label>
      <p>
        名前：
        <input type="text" name="name" placeholder="名前を入力してください" minlength="6" required>
      </p>
    </label>
    <label>
      <p>
        メールアドレス：
        <input type="email" name="email" placeholder="メールアドレスを入力してください">
      </p>
    </label>
    <label>
      <p>
        パスワード：
        <input type="password" name="password" placeholder="パスワードを入力してください" minlength="6">
      </p>
    </label>
    <input type="submit" value="送信">
  </form>
  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $pass = $_POST["password"];

      if(empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)|| strlen($pass) < 6) {
        echo "<p>規則を満たしていません</p>";
      } else {
        echo 
        "<div>
          <p>名前：{$name}</p>
          <p>メールアドレス：{$email}</p>
          <p>パスワード：*****</p>
        </div>";
      }
    }
  ?>
</body>
</html>