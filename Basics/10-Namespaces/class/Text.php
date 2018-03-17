<?php

/**
 * Class Text
 */
class Text
{
    // Define static private
    private static $suffix = " €";
    const SUFFIX = " €";

    /**
     * @param $chiffre integer
     * @return string
     */
    public static function withZero($chiffre)
    {
        // Call static attribute with self
        return $chiffre < 9 ? '0' . $chiffre . self::SUFFIX : $chiffre;
    }
}
