<?php

// Declare a class
class Character
{
    // Define constant value
    const MAX_VIE = 100;

    protected $life = 80;          // Declare a public property
    protected $atk = 20;           // Declare a protected property
    protected $name;               // Declare a protected property

    // Define the constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Getters
    public function getName()
    {
        return $this->name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    // Setters
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function setAtk($atk)
    {
        $this->atk = $atk;
    }

    // Declare a method
    public function shout()
    {
        echo 'AHHHHHHHH';
    }

    public function regenerate($life = null)
    {
        // call constant value with self
        $this->life = is_null($life) ? self::MAX_VIE : $this->life + $life;
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
        $target->preventNegative();
    }

    protected function preventNegative()
    {
        $this->life = $this->life <0 ? 0 : $this->life;
    }
}
