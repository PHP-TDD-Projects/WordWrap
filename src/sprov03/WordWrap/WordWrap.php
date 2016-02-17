<?php
/**
 * WordWrap
 * @package WordWrap
 * @version 0.1.0
 * @link https://github.com/sprov03/WordWrap
 * @author sprov03 <https://github.com/sprov03>
 * @license https://github.com/sprov03/WordWrap/blob/master/LICENSE
 * @copyright Copyright (c) 2014, sprov03 
 */

namespace sprov03\WordWrap;

require(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php');

/**
 * The WordWrap class
 * @author sprov03 <https://github.com/sprov03>
 * @since 0.1.0
 */
class WordWrap {

	/**
	 * A sample parameter
	 * @var int $myParam This is my parameter
	 * @since 0.1.0
	 */
	public $myParam = 0;

	/**
	 * A sample function that adds the $n param to $myParam
	 * @name increase
	 * @param int $n The number to add to $myParam
	 * @since 0.1.0
	 * @return object the WordWrap object
	 */
	public function increase ( $n ) {
		$this->myParam += $n;
		return $this;
	}

	/**
	 * A sample function that sets $myParam to 0
	 * @name negate
	 * @since 0.1.0
	 * @return object the WordWrap object
	 */
	public function negate (){
		$this->myParam = 0;
		return $this;
	}
}
