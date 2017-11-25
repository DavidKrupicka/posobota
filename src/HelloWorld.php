<?php

namespace PosledniSobota;

class HelloWorld
{
    private $name;

    public function __construct($name)
    { sageas g
        $this->name = $name;
    }

    public function sayHello()
    {
        return 'Hello ' . $this->name;
    }
}
