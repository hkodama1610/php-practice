<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foreach</title>
</head>
<body>
  <p>
    <?php
    $num = mt_rand(0, 4);

    //  変数$numの値が0以外である間、 変数$numの値を出力し続ける
    while ($num !== 0) {
      $num = mt_rand(0, 4);
      echo $num;
    }
    ?>
  </p>
</body>
</html>