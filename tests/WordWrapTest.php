<?php
require_once(dirname(dirname(__FILE__)) . '/src/sprov03/WordWrap/WordWrap.php');
use sprov03\WordWrap\WordWrap as myClass;

class WordWrapTest extends PHPUnit_Framework_TestCase
{
	public function testCanBeNegated () {
		$a = new myClass();
		$a->increase(9)->increase(8);
		$b = $a->negate();
		$this->assertEquals(0, $b->myParam);
	}

	public function test()
	    {
			// Arrange
			
	        // Act
	        
	        // Assert
	        $this->assertEquals(1, 4);
	    }

}
