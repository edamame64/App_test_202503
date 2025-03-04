<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>シンプルな計算アプリ</title>
</head>
<body>
  <h1>シンプル電卓</h1>
  <form method="post">
    <input type="number" name="num1" required="数値を入力してください" placeholder="数値1">
    <select name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">x</option>
      <option value="/">÷</option>
    </select>
    <input type="number" name="num2" required="数値を入力してください" placeholder="数値2">
    <button type="submit">計算</button>
  </form>
  <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $operator = $_POST["operator"];
      $result = "";

      if(!is_numeric($num1) || !is_numeric($num2)) {
        echo "数値を入力してください";
      } else {
        switch($operator) {
          case "+":
            $result = $num1 + $num2;
            break;
          case "-":
            $result = $num1 - $num2;
            break;
          case "*":
            $result = $num1 * $num2;
            break;
          case "/":
            if($num2 === 0) {
              echo "0で割ることはできません";
            } else {
              $result = $num1 / $num2;
            }
            break;
          default:
            echo "正しく表示できません。";
            break;
        }
        echo "<h3>計算結果: {$result}</h3>";
      }
    }
  ?>
</body>
</html>