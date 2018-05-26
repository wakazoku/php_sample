<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/27
 * Time: 0:32
 */

/**
 * @return Generator
 */
function getPrimes(): Generator
{
    $num = 2; // 素数の開始地

    // 2から順に素数判定し、素数の場合だけyield(無限ループ)
    while (true) {
        if (isPrime($num)) {
            yield $num;
        }
        $num++;
    }
}

/**
 * @param int $value
 * @return bool
 */
function isPrime(int $value): bool
{
    $prime = true; // 素数かどうか表すフラグ

    // 2 ~sqrt($value)で$valueを割り切れる(余りが0)のものがあるか
    for ($i = 2; $i <= floor(sqrt($value)); $i++) {
        if ($value % $i === 0) {
            $prime = false; // 割り切れるものがあれば素数ではない
            break;
        }
    }
    return $prime;
}

// 素数を順に出力
foreach (getPrimes() as $prime) {
    // 素数が101になったら終了
    if ($prime > 100) {
        die();
    }
    echo $prime . ',';
}
