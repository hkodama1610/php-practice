<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>関数</title>
</head>
<body>
  <p>
    <?php
    // 朝の挨拶
    function say_good_morning() {
      echo 'おはようございます！';
      echo '昨日は良く眠れましたか？';
      echo '今日も一日頑張りましょう！';
    }

    // 夜の挨拶
    function say_good_evening() {
      echo 'こんばんわ！<br>';
      echo '今日も一日お疲れ様でした。<br>';
    }

    // 朝の挨拶を出力する関数を呼び出す
    say_good_morning();

    // 夜の挨拶を出力する関数の呼び出し
    say_good_evening();
    ?>
  </p>

  <p>
    <?php
    function calculate_total($price) {
      $total = $price + 500;

      echo $total . '円<br>';
    }

    // 関数を呼び出し、引数として購入金額を渡す
    calculate_total(1200);

    // 与えられた引数同士を加算し出力する関数の定義
    function add_two_arguments($price, $shipping_fee) {
      $total = $price + $shipping_fee;

      echo $total . '円<br>';
    }

    // 関数を呼び出し、引数として購入金額と送料を渡す
    add_two_arguments(1200, 500);
    ?>
  </p>
  <p>
    <?php
    // 与えられた引数$sumを2倍にし、その値を戻り値として返す関数を定義する
    function double($sum) {
      return $sum * 2;
    }

    // 関数の戻り地を出力する
    echo double(30);
    ?>
  </p>
  <p>
    <?php
    // 引数の型を指定
    function type_hinting_argument(int $num) {
      return $num * 2;
    }

    // // 型宣言と異なるデータ型の引数を渡す
    // echo type_hinting_argument(1.618);
    // 型宣言と同じデータ型の引数を渡す
    echo type_hinting_argument(1);
    ?>
  </p>
  <p>
    <?php
    // 戻り値の型宣言を行い、戻り値を整数型に限定する
    function type_hinting_return_value($num): int {
      return $num * 2;
    }
    ?>
  </p>
</body>
</html>