<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foreach</title>
</head>
<body>
  <p>
    <?php
    $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];

    // 配列$user_namesの要素を１つずつ出力する
    foreach ($user_names as $user_name) {
      echo $user_name . '<br>';
    }
    ?>
  </p>
  <p>
    <?php
    $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];

    // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
    foreach ($personal_data as $key => $value) {
      echo "{$key}は{$value}です。<br>";
    }

    // 連想配列$personal_dataの値を1つずつ順番に出力する
    foreach ($personal_data as $value) {
      echo $value . '<br>';
    }
    ?>
  </p>
  <p>出身地を選択してください。</p>
  <form>
    <select>
    <?php
    $regional_datas = ['北海道地方', '東北地方', '関東地方', '中部地方', '近畿地方', '中国・四国地方', '九州地方'];
    foreach ($regional_datas as $regional_data) {
      echo "<option>{$regional_data}</option>";
    }
    ?>
    </select>
  </form>
</body>
</html>