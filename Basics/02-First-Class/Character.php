<?php

// Declare a class
class Character
{
    public $life = 80;          // Declare a public property
    protected $atk = 20;        // Declare a protected property
    private $name;              // Declare a private property

    // Define the constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Declare a method
    public function shout()
    {
        echo 'AHHHHHHHH';
    }

    public function regenerate($life = null)
    {
        $this->life = is_null($life) ? 100 : $this->life + $life;
    }

    // Method to check if character is dead (>= 0)
    public function isDead()
    {
        return $this->life <= 0;
    }

    // Method to attack another Character type Object
    public function attack(Character $target)
    {
        $target->life -= $this->atk;
    }
}
