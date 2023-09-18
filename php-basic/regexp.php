<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>正規表現</title>
</head>
<body>
  <h2>
    <?php
    // str=「文字列」を意味するstringの略
    $str = 'Appleが5個あります。Orangeは1個しかありません。';

    echo '検索対象：' .$str;
    ?>
  </h2>
  <p>
    <?php
    echo '「Orange」が含まれているかどうか正規表現で検索します。<br>';

    if(preg_match('/Orange/', $str)) {
      echo '>正規表現に一致しました。';
    } else {
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '「A」で始まっているかどうかを正規表現で検索します。<br>';

    if(preg_match('/^A/', $str)) {
      echo '>正規表現に一致しました。';
    } else {
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
</body>
</html>