<?php
require_once dirname(__FILE__) . '/../Classes/CheckForNumberFour.php';
class CheckForNumberFourTest extends PHPUnit_Framework_TestCase
{
    private $num;
    function setUp()
    {
        $this->num = new CheckForNumberFour();
    }
}