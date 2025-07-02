<?php
require_once 'Animal.php';
class Cat extends Animal
{
    private $color;
    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age);

        $this->color = $color;

    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color): void
    {
        $this->color = $color;
    }


}
?>