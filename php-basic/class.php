<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラス</title>
</head>
<body>
  <p>
    <?php
    // クラスの定義
    class Product {
      // プロパティを定義する
      public $name;

      // メソッドの定義
      public function set_name(string $name) {
        $this->name = $name;
      }

      public function show_name() {
        echo $this->name . '<br>';
      }
    }

    // インスタンス化
    $coffee = new Product();

    // メソッドにアクセスして実行する
    $coffee->set_name('コーヒー');
    $coffee->show_name();

    // インスタンス化する
    $shampoo = new Product();

    // プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';

    // プロパティにアクセス、値を出力する
    echo $shampoo->name;
    ?>
  </p>
  <p>
    <?php
    // クラスを定義する
    class User {
      //  プロパティを定義する
      private $name;
      private $age;
      private $gender;

      // コンストラクタを定義する
      public function __construct(string $name, int $age, string $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
      }
    }

    //  インスタンス化
    $user = new User('侍太郎', 36, '男性');

    // インスタンス$userの各プロパティの値を出力する
    print_r($user);
    ?>
  </p>
</body>
</html>