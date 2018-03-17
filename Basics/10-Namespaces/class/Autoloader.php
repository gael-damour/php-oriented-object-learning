<?php

namespace Tutoriel;

class Autoloader
{
    // static method to execute spl_autoload_register
    public static function register()
    {
        spl_autoload_register([self::class, 'autoload']);
    }

    // static function to execute into spl_autoload_register (by callback)
    private static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);

            require 'class/' . ucfirst($class) . '.php';
        }
    }
}
