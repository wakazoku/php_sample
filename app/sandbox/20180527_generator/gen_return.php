<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/27
 * Time: 0:59
 */
require_once 'ReadFileGenerator.class.php';

$read_file_generator = new ReadFileGenerator();

// sample.datから行単位にテキストを出力
$gen = $read_file_generator->readLines('sample.dat');
foreach ($gen as $line) {
    echo $line . "<br />";
}

// 最終的に読み込んだ行数を取得
echo "読み込んだ行数:" . $gen->getReturn();
