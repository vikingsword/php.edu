<?php
class Demo {
    protected $demo;

    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    public function test()
    {
        echo $this->demo;
    }
}

$demo = new Demo("123");
echo $demo;