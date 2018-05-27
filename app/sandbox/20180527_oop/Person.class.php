<?php
/**
 * Created by PhpStorm.
 * User: wakatabi
 * Date: 2018/05/27
 * Time: 21:47
 */

namespace Person;

class Person
{
    public $firstName;
    public $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct()
    {
        echo "<p>" .  __CLASS__ . "オブジェクトが破棄されました。</p>";
    }

    public function show(): void
    {
        echo $this->firstName . $this->lastName;
    }
}