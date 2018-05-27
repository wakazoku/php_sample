<?php
/**
 * Created by PhpStorm.
 * User: wakatabi
 * Date: 2018/05/27
 * Time: 1:45
 */


class ReadFileGenerator
{
    /**
     * @param string $path
     * @return Generator|int
     */
    public function readLines(string $path): Generator
    {
        $line_count = 0; //行数
        $file = fopen($path, 'rb') or die('ファイルが見つかりません');

        // 行単位にテキストを取得&yield
        while ($line = fgets($file, 1024)) {
            $line_count++;
            yield $line;
        }
        fclose($file);

        // 読み込んだテキストの行数を返却
        return $line_count;
    }
}