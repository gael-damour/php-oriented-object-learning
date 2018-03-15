<?php
require 'Character.php'; // To allow to use Character class

// Instanciation with "new" key word
$merlin = new Character("Merlin");
$harry = new Character("Harry");

// Call a method of $merlin object
$merlin->attack($harry);

if ($harry->isDead()) {
    echo 'Harry is dead :(';
} else {
    // Call method to get the life of Harry
    echo 'Harry survived with ' . $harry->getLife() . ' life points ! \o/';
}

// Call method to set a new value to a property or protected name
$harry->setName("Peter");

// Call method to get property private or protected
echo $harry->getName();


// Dump the objects to view the states.
var_dump($merlin);
var_dump($harry);
