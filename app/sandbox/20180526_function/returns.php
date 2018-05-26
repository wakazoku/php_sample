<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 18:56
 */

/**
 * 受け取った数値の最大値、最小値の値を配列で返却する
 *
 * @param float ...$args
 * @return array
 */
function max_min(float ...$args): array {
    // ...は可変長引数リスト
    // http://php.net/manual/ja/functions.arguments.php#functions.variable-arg-list

    // 最大値/最小値の順で配列を作成
    return [max($args), min($args)];
}