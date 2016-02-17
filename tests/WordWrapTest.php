<?php
//require_once(dirname(dirname(__FILE__)) . '/src/sprov03/WordWrap/WordWrap.php');
require_once dirname(__FILE__) . '/../Classes/Wrapper.php';
use sprov03\WordWrap\WordWrap as myClass;

class WordWrapTest extends PHPUnit_Framework_TestCase
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
