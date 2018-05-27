<?php
/**
 * Created by PhpStorm.
 * User: wakatabi
 * Date: 2018/05/28
 * Time: 1:01
 */

namespace Area;

class Area
{
    const PI = 3.14;

    public static function circle(float $radius): float
    {
        return pow($radius, 2) * self::PI;
    }
}
