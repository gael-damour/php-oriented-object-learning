<?php

/**
 * Class Archer
 * extends allows to inherit of another class
 */
class Archer extends Character
{
    // Redefine (overload) the property
    protected $life = 40;

    // Overload constructor
    public function __construct($name)
    {
        parent::__construct($name);
    }


    // Overload the method
    public function attack(Character $target)
    {
        $target->life -= $this->atk;
        parent::attack($target);
        $target->preventNegative();
    }
}
