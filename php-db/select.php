<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP+DB</title>
</head>
<body>
  <p>
    <?php
    $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = 'root';

    try {
      // データベースの接続を試行する
      $pdo = new PDO($dsn, $user, $password);

      // データ取得
      $sql = 'SELECT id, name FROM users';

      // SQL文実行
      $stmt = $pdo->query($sql);

      // SQL文を実行結果を配列で取得する
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo 'クエリの実行に成功しました。';

      // 配列の中身を出力する
      print_r($result);
    } catch (PDOExeption $e) {
      // データベースの接続に失敗した場合の処理
      exit('データベースの接続に失敗しました。' . $e->getMessage());
    }
    ?>
  </p>
</body>
</html>