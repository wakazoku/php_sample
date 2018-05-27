<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/28
 * Time: 1:03
 */
require_once 'Area.class.php';

echo "円周率: " . \Area\Area::PI . "<br />";

echo "円の面積: " . Area\Area::circle(10) . "cm^2";
