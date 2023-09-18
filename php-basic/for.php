<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>繰り返し処理</title>
</head>
<body>
  <p>
    <?php
    // 繰り返し処理
    for ($i = 1; $i <= 10; $i ++) {
      echo $i . '<br>';

      // カウンタ変数$iの値が5であれば、break文で繰り返し処理を強制終了する
      if ($i === 5) {
        break;
      }
    }
    ?>
  </p>
  <p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
      // ランダムな数字の生成
      $num = rand(1,20);
      // 値の出力
      echo $i . '回目の結果は' . $num . 'です<br>';

      if ($num === 20) {
        echo '20が出たので繰り返し処理を終了します。';
        break;
      }
    }
    ?>
  </p>
  <p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
      // カウンタ変数$iの値が奇数であれば値を出力しない
      if ($i % 2 === 1) {
        continue;
      }

      echo $i . '<br>';
    }
    ?>
  </p>
</body>
</html>