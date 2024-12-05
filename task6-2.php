<?php

class A
{

    public function foo()
    {

        static $x = 0;

        echo ++$x;
    }
}

class B extends A {}

$a1 = new A();

$b1 = new B();

$a1->foo();

$b1->foo();

$a1->foo();

$b1->foo();


// выведет в консоли 1234

// используется static, а не self, 
// указывать на класс, в котором хранится описание.
