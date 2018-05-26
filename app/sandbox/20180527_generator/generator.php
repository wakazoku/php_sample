<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/27
 * Time: 0:05
 */

/**
 * @return Generator
 */
function myGen()
{
    yield 'あいうえお';
    yield 'かきくけこ';
    yield 'さしすせそ';
}

foreach (myGen() as $value) {
    echo $value . "<br / >";
}
