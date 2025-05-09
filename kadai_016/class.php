<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>
    <body>
        <p>HTML</p>
        <p>
            <?php
        class Food {
            //プロパティ
            public $name;
            public $price;
            //メソッド
            public function show_price($price){
                $this->price = $price;
                echo $this->price . '<br>';
            }
            //コンストラクタ
            public function __construct($name,$price){
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal {
            //プロパティ
            public $name;
            public $height;
            public $weight;
            //メソッド
            public function show_height($height){
                $this->height = $height;
                echo $this->height . '<br>';
            }

        //コンストラクタ
            public function __construct($name,$height,$weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        
        //インスタンス化
        $food = new Food('卵',300);
        $animal = new Animal('猫',30,10);

        //メソッドに代入
        $food->show_price(300);
        
        $animal->show_height(30);

        print_r($food);
        echo '<br>';
        print_r($animal);
        ?>
        </p>
    </body>
</html>