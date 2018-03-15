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
    // Call a property of $harry object
    echo 'Harry survived with ' . $harry->life . ' life points ! \o/';
}

// Dump the objects to view the states.
var_dump($merlin);
var_dump($harry);
