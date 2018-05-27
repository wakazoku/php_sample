<?php
/**
 * Created by PhpStorm.
 * User: wakatabi
 * Date: 2018/05/26
 * Time: 20:19
 */

class common
{
    // 高階関数my_array_walkを定義
    public function my_array_walk(array $array, callable $func) {
        // 配列$arrayの内容を順に処理
        foreach ($array as $key => $value) {
            $func($value, $key); // $funcで指定された関数を呼び出し
        }
    }
}