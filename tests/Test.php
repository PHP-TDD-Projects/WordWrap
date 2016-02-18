<?php
use sprov03\WordWrap\WordWrap as myClass;
require_once dirname(__FILE__) . '/../Classes/Fibonacci.php';
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
}
