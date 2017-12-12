<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("dato invalido");
        }

        $this->age = $age;
    }
}

$tom = new Person('Tom');

$tom->setAge(18);

var_dump($tom->getAge());
