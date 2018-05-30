<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/30
 */

require_once 'TriangleFigure.class.php';

$triangle = new TriangleFigure(10, 5);
echo 'その1 ' . $triangle->getArea() . '<br />';

$triangle->setBase(20);
$triangle->setHeight(10);
echo 'その2 ' . $triangle->getArea() . '<br />';

$triangle->setBase(0);
$triangle->setHeight(-4);
echo 'その3 ' . $triangle->getArea() . '<br />';

$triangle2 = new TriangleFigure(0, -1);
