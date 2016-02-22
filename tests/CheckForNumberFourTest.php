<?php

class CheckForNumberFourTest extends PHPUnit_Framework_TestCase
{
    private $num;
    function setUp()
    {
        $this->num = new CheckForNumberFour();
    }

    /**
     * @dataProvider numbersWithDigit4Generator
     */
    function testToCheckHowManyNumber4DigitsInNumber($number, $countOfDigits4)
    {
        $this->assertEquals($this->num->countDigit4In($number), $countOfDigits4);
    }

    function numbersWithDigit4Generator()
    {
        return [
            [10, 1],
            [4, 1],
            [3,0],
            [328, 60]
        ];
    }
    /*function testLoop1Through3Count0Digit4()
    {
        $this->assertEquals($this->num->countDigit4In(3), 0);
    }
    function testLoop1Through14ShouldCount2Digit4()
    {
        $this->assertEquals($this->num->countDigit4In(14), 2);
    }
    function testLoop1Through328ShouldCount60Digit4()
    {
        $this->assertEquals($this->num->countDigit4In(328), 60);
    }*/
}