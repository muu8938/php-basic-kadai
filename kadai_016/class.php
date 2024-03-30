<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
      <p>
          <?php
          // クラスを定義する
          class Food {

            // foodプロパティを定義
            private $name;
            private $price;

            // コンストラクタの定義
            public function __construct(string $name, int $price){
              $this->name = $name;
              $this->price = $price;
            }

            // メゾット「show_price」
            public function show_price() {
                echo $this->price . '<br>';
            }
          }


          // クラスを定義する
          class Animal {

            // animalプロパティを定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタの定義
            public function __construct(string $name, int $height, int $weight){
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
            }

            // メゾット「show_height」
            public function show_height() {
              echo $this->height . '<br>';
          }
        }


          // インスタンス化する
          $food = new Food('potato' , 250);
          $animal = new Animal('dog', 60, 5000);

          // インスタンスの値を出力する
          print_r($food);
          echo '<br>';
          
          print_r($animal);
          echo '<br>';

          // メゾットにアクセスして実行
          $food->show_price(250);
          $animal->show_height(60);
          ?>
      </p>
</body>

</html>
