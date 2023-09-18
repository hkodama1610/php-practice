<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>連想配列</title>
</head>
<body>
  <p>
    <?php
      // 連想配列
      $personal_data = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性'];
      $personal_data1 = ['name' => '侍太郎', 'age' => 36, 'gender' => '男性', 'address' => '東京都', 'phone_number' => '070-0809-1160'];

      // 'gender'というキーを持つ値（'男性'）が出力される
      echo $personal_data1['gender'];

      // 改行する
      echo '<br>';

      // 'age'というキーの値を更新する
      $personal_data['age'] = 37;

      // 連想配列の値を出力する
      print_r($personal_data);

      // 新しく要素（キーと値）を更新する
      $personal_data['address'] = '東京都';

      // 改行する
      echo '<br>';

      // 連想配列の値を出力する
      print_r($personal_data);
    ?>
  </p>
</body>
</html>