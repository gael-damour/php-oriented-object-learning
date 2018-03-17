<?php

class Autoloader
{
    // static function to execute into spl_autoload_register (by callback)
    private static function autoload($class_name)
    {
        require 'class/' . ucfirst($class_name) . '.php';
    }

    // static method to execute spl_autoload_register
    public static function register()
    {
        spl_autoload_register([self::class, 'autoload']);
    }
}
