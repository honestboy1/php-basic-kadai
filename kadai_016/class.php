<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // showPriceメソッドを追加
            public function showPrice() {
                echo $this->price;
            }
        }

      

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // showHeightメソッドを追加
            public function showHeight() {
                echo $this->height;
            }
        }
        $food = new Food('potato', 250);
        print_r($food);

        echo '<br>';

        // showPriceを呼び出して価格を表示
        $food->showPrice();

        echo '<br>';

        $animal = new Animal('dog', 60, 5000);
        print_r($animal);

        echo '<br>';

        // showHeightを呼び出して高さを表示
        $animal->showHeight();
        ?>
    </p>
</body>
</html>