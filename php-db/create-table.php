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

      // usersテーブルを作成するためのSQL文を変数$sqlに代入する
      $sql = 'CREATE TABLE IF NOT EXISTS users (
          id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          name VARCHAR(60) NOT NULL,
          furigana VARCHAR(60) NOT NULL,
          email VARCHAR(255) NOT NULL,                    
          age INT(11),
          address VARCHAR(255)                    
      )';
      
      // SQL文を実行する
      $pdo->query($sql);
    } catch (PDOExeption $e) {
      // データベースの接続に失敗した場合の処理
      exit('データベースの接続に失敗しました。' . $e->getMessage());
    }
    ?>
  </p>
</body>
</html>