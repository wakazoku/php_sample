<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 20:15
 */
require_once 'common.class.php';

$common = new common();

$people = ['杉山', '長田', '杉沼', '和田', '土井',];
$common->my_array_walk($people, function ($value, $key){
    echo $key . ":" . $value . "<br />";
});



