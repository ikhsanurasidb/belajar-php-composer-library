<?php

namespace kuraninja\Belajar;

class Customer
{
    public function __construct(private string $name = "Kamu")
    {
    }

    public function sayHello(string $name)
    {
        echo "Hello, $name! My name is $this->name\n";
    }
}