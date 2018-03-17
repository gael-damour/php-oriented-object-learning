<?php

require 'Text.php';
require 'Character.php';

var_dump(Text::withZero(3));

$merlin = new Character('Merlin');
$merlin->regenerate();
var_dump($merlin);
