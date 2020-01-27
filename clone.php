<?php
class Person
{
    public $gender;
    public $name;
    public $age;

    public function __construct($name="",  $age=25, $gender='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->gender  = $gender;
    }

    public function __clone()
    {
        echo __METHOD__."your are cloning the object.<br>";
    }
}
$person = new Person('John');
$person2 = clone $person;

var_dump('persion1:');
var_dump($person);
echo '<br>';
var_dump('persion2:');
var_dump($person);
?>