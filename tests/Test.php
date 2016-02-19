<?php

class FibonacciTest extends PHPUnit_Framework_TestCase
{

    private $fib;


    function setUp ()
    {
        $this->fib = new Fibonacci();
    }
    function testIfOneIsAFibonacciNumber()
    {
        $this->assertTrue($this->fib->isFibonnaci(1));
    }
    function testIfTwoIsAFibonacciNumber()
    {
        $this->assertTrue($this->fib->isFibonnaci(2));
    }
    function testIfThreeIsAFibonnaciNumber()
    {
        $this->assertTrue($this->fib->isFibonnaci(3));
    }
    function testFourShouldNotBeFibonnaciNumber()
    {
        $this->assertFalse($this->fib->isFibonnaci(4));
    }
    function testEightNineIsFibonnaciNumber()
    {
        $this->assertTrue($this->fib->isFibonnaci(89));
    }
    function testSuperHighNumberShouldBeFalse()
    {
        $this->assertFalse($this->fib->isFibonnaci(1034583495));
    }
}
