<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>配列</title>
</head>
<body>
  <p>
    <?php
    // 配列
    $user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
    $user_ages = [36, 33, 29, 25, 22];

    // 要素の取り出し
    echo $user_names[1];

    // 要素の更新
    $user_names[1] = '侍花子';

    // 6番目に要素を追加する
    $user_names[5] = '侍五郎';

    echo '<br>';

    echo $user_names[5];

    // 末尾に要素を追加する
    $user_names[] = '侍六郎';

    echo '<br>';

    echo $user_names[6];

    print_r($user_names);
    ?>
  </p>
</body>
</html>