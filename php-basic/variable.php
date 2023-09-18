<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数に値を代入する
        $user_name = '侍太郎';

        // 変数の中身を出力する
        echo $user_name;

        echo '<br>';

        // 変数に値を代入する
        $user_name = '侍花子';

        // 変数の中身を出力する
        echo $user_name;
        ?>
    </p>
    <p>
        <?php
        // 変数と数値の計算
        $number = 3;

        // 変数と数値を計算し、その結果を出力する
        echo $number - 1.2;

        // 改行する
        echo '<br>';

        // 変数に値を代入する
        $my_name = '侍一郎';

        // 変数と文字列の連結
        echo '私の名前は' . $my_name . 'です。';
        ?>
    </p>
    <p>
        <?php
        // 文字列の中で変数の中身を表示する（変数展開）
        $my_name = '侍一郎';
        $my_name = $my_name . '(16)';
        echo "私の名前は{$my_name}です。";
        ?>
    </p>
</body>

</html>
