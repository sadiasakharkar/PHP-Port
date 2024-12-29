<?php

class Rectangle {
    private $length;
    private $width;

    public function __construct($length , $width){
        $this -> length = $length;
        $this -> width = $width;
    }

    public function getarea(){
        return $this -> length * $this->  width;
    }

    public function getperimeter(){
        return 2 *($this -> length + $this -> width);
    }
}

$rectangle = new Rectangle(10 , 5);
echo "Area:" , $rectangle -> getarea();
echo " Perimeter: " , $rectangle -> getperimeter();
?>