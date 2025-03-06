
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today</title>
</head>
<body>
    <?php date_default_timezone_set("Asia/Tokyo");?>
    <h1>現在の日付・時刻</h1>
    <p>今日の日付は、<?php echo date('Y年m月d日 (l)'); ?>です。</p>
    <p>現在時刻は&nbsp;<?php echo date("H:i:s");?>&nbsp;です。</p>
</body>
</html>