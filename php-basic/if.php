<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>条件分岐</title>
</head>
<body>
  <p>
    <?php
    $num = 50;

    // もし変数$numが10より大きいならば、「変数$numは10より大きいです」という文字列を出力
    if ($num > 10) {
      echo '変数$numは10より大きいです';
    }

    // 比較演算子を使った場合の戻り地を出力する
    echo 45 + 18;

    // 改行する
    echo '<br>';

    // 比較演算子を使った場合の戻り地を出力する
    var_dump(45 > 18);
    ?>
  </p>
  <p>
    <?php
    // 比較演算子を使った場合の戻り地を出力する
    var_dump('5' == 5);

    echo '<br>';

    // 厳密等価演算子を使った場合の戻り地を出力する
    var_dump('5' === 5);
    ?>
  </p>
  <p>
    <?php
    // 値が4であれば「大当たりです」という文字列出力
    $num = rand(0,4);

    // $numを出力
    echo $num . '<br>';

    if ($num === 4) {
      echo '大当たりです。';
    } else {
      echo 'はずれです。';
    }
    ?>
  </p>
  <p>
    <?php
    // 値が4であれば「大当たりです」という文字列出力
    $num = rand(0,4);

    // $numを出力
    echo $num . '<br>';

    if ($num === 4) {
      echo '大当たりです。';
    } elseif ($num === 3) {
      echo 'あたりです';
    } else {
      echo 'はずれです。';
    }
    ?>
  </p>

</body>
</html>