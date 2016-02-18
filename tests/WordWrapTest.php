<?php
//require_once(dirname(dirname(__FILE__)) . '/src/sprov03/WordWrap/WordWrap.php');
use sprov03\WordWrap\WordWrap as myClass;

class Test extends PHPUnit_Framework_TestCase
{

	public function test()
	    {
			// Arrange

	        // Act

	        // Assert
	        $this->assertEquals(1, 1);
	    }

    function testCanCreateAWrapper() {
        $wrapper = new Wrapper();
    }
}
