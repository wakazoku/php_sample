<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 20:36
 */
require_once 'common.php';

// 結果を求めるための関数
$data = [100, 50, 10, 5];

// 結果値を格納するための関数
$result = 0;

$common = new common();
// useで親スコープの変数$resultを引き継ぐ
$common->my_array_walk($data, function(float $value, int $key) use(&$result) {
    $result += $value;
});

echo "合計値:" . $result;
