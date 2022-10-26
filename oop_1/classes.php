<?php
    class Human {
        public $name, $age, $country, $gender;
        private $id;

        function __construct($name, $age, $country, $id){
            $this->name = $name;
            $this->age = $age;
            $this->country = $country;
            $this->id = $id;
        }

        function getName(){
            return $this->name;
        }
        function getAge(){
            return $this->age;
        }
        function getCountry(){
            return $this->country;
        }
        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id = $id;
        }

        function showInfo(){
            // echo "Name = $this->name & Age = $this->age";
            return [ 'name' => $this->name, 'age' => $this->age];
        }
    }


    $h1 = new Human("Ali", 21, "Pak", "B12321");
    // echo $h1->getId();
    // $x = end($h1->showInfo());
    // // echo $x;
    // $name = "Hi.abc.xyz.tg";
    // print_r($a);





    // $a = explode(".",$name);
    ?>
