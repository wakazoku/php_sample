<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 19:18
 */

/*
 * 受け取った数値を再帰的に計算する
 *
 * @param float ...$args
 * @return array
 *
 */
function factional(int $num): int {
    if($num !== 0) {
        return $num * factional($num -1);
    }
    return 1;
 }
 print factional(5);