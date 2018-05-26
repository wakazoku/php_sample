<?php
/**
 * Created by PhpStorm.
 * Date: 2018/05/27
 * Time: 1:42
 */

require_once 'ReadFileGenerator.php';

function readFiles(array $files, ReadFileGenerator $r_gen): Generator
{
    // 配列から順にファイルパスを取り出す
    foreach ($files as $file) {
        // ジェネレータからreadLinesに処理を委ねる
        yield from $r_gen->readLines($file);
    }
}

$read_file_generator = new ReadFileGenerator();
foreach (readFiles(['sample.dat', 'sample2.dat'], $read_file_generator) as $line) {
     print $line . '<br />';
};
