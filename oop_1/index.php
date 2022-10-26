<?php

    class Car {
        public $name, $color, $model, $engineNo, $ac, $speed=0;

        function __construct($n="New Car"){
            $this->name = $n;
        }

        function speedIncrease(){
            $this->speed += 10;
        }
    }

    class BMW extends Car {
        public $battery, $selfControl;
        function __construct($name, $bat){
            parent::__construct($name);
            $this->battery = $bat;
        }

        function speedIncrease(){
            $this->speed += 30;
        }
    }

    $c1 = new Car();
    $c1->speedIncrease();
    
    echo "<h1>Car Object</h1>";
    echo "$c1->speed"."\n";
    echo "$c1->name";
    
    $bmw1 = new BMW("bmw1", 'yes');
    $bmw1->speedIncrease();
    
    echo "<h1>BMW Object</h1>";
    echo "$bmw1->speed"."\n";
    echo "$bmw1->name";



?>