<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 19:25
 */

function getTriangleArea(float $base, float $height): float {
    return $base * $height / 2;
}

$name = 'getTriangleArea';
echo '三角形の面積は' . $name(8, 10) . 'です！';
