<?php

use \Tutoriel\Character\Character;
use \Tutoriel\Character\Archer;
use \Tutoriel\Autoloader;

require 'class/Autoloader.php';
Autoloader::register();

$merlin = new Character('Merlin');
$harry = new Character('Harry');
$legolas = new Archer('Legolas');

$legolas->attack($harry);

var_dump($merlin, $harry, $legolas);
