<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 19:47
 */

require_once 'common.class.php';

function showItem($value, $key){
    echo $key . ": " . $value . "<br />";
}

function sum(float $value, int $key){
    global $result;
    $result += $value;
}
$common = new common();

// グローバル変数$resultを初期化しておく
$result = 0;

$people = ['杉山', '長田', '杉沼', '和田', '土井',];
$common->my_array_walk($people, 'showItem');

$data = [100, 50, 10, 5];
$common->my_array_walk($data, 'sum');
echo "合計値: " . $result;
