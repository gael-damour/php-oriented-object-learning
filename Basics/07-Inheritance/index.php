<?php

require 'Character.php';
require 'Archer.php';

$merlin = new Character('Merlin');
$harry = new Character('Harry');

$legolas = new Archer('Legolas');

$legolas->attack($harry);

var_dump($merlin, $harry, $legolas);
