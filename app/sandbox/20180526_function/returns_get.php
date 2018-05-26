<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/26
 * Time: 19:01
 */
require_once 'returns.php';

$result = max_min(10, 2, -5, 3, 78);
print_r($result); // Array ( [0] => 78 [1] => -5 )

list($max, $min) = max_min(10, 2, -5, 3, 78);
echo "最大値:{$max} 最小値:{$min}"; //最大値:78 最小値:-5