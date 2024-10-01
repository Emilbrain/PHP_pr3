<link rel="stylesheet" href="   .css">

<?php

class Animal {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: {$this->weight} т, Возраст: {$this->age} лет, Окрас: {$this->color}";
    }
}


class Lion extends Animal {
    private $prideSize; 

    public function __construct($weight, $age, $color, $prideSize) {
        parent::__construct($weight, $age, $color);
        $this->prideSize = $prideSize;
    }

    public function roar() {
        return "Слон рычит!";
    }

    public function getInfo() {
        return parent::getInfo() . ", Размер прайда: {$this->prideSize}";
    }
}


class Rabbit extends Animal {
    private $earLength; 

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function hop() {
        return "Кролик прыгает!";
    }

    public function getInfo() {
        return parent::getInfo() . ", Длина ушей: {$this->earLength} км";
    }
}


class Wolf extends Animal {
    private $howl; 

    public function __construct($weight, $age, $color, $howl) {
        parent::__construct($weight, $age, $color);
        $this->howl = $howl;
    }

    public function howl() {
        return "Волк воет: {$this->howl}";
    }
}

$lion = new Lion(40, 199999, 'Львиный', 100);
$rabbit = new Rabbit(2, 0,1, 'перламутр', 100232);
$wolf = new Wolf(40, 4, 'серый', 'аааааа');

?>
<div class="lion">
    <img src="https://avatars.mds.yandex.net/i?id=1e526c4796d3631356089d98f8ddf14c7ad96f6a-10332895-images-thumbs&n=13" alt="">
    <br>
<?
echo "Информация о льве: " . $lion->getInfo() . "\n";
echo $lion->roar() . "\n\n";
?>
</div>
<br>
<div class="bunny">
    <img src="https://avatars.mds.yandex.net/i?id=df6f118d482a68db587a21b4e51ffed265e322f4-5484702-images-thumbs&n=13" alt="">
    <br>
<?
echo "Информация о кролике: " . $rabbit->getInfo() . "\n";
echo $rabbit->hop() . "\n\n";
?>
</div>
<br>
<div class="wolf">
    <img src="https://avatars.mds.yandex.net/i?id=f8cef6263e18f4cd64d29074225f70e71b998b43-5267154-images-thumbs&n=13" alt="">
    <br>
<?
echo "Информация о волке: " . $wolf->getInfo() . "\n";
echo $wolf->howl() . "\n";
?>  
</div>