<?php

require_once dirname(__FILE__) . '/../../../web/concrete/libraries/request.php';

/**
 * Test class for Request.
 * Generated by PHPUnit on 2011-07-07 at 22:30:33.
 */
class RequestTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Request
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	public function testParse() {
		//we create new objects in order to test the private parse() method

		//testing blocks, both with and without the .php extension
		foreach (array('subdir/file', 'subdir/file.php', 'file', 'file.php') as $file) {
			$req = new Request('tools/BLOCKS/block_handle/' . $file);

			$this->assertEquals('BLOCK_TOOL', $req->getIncludeType());
			$this->assertEquals('block_handle', $req->getBlock());
			$this->assertEquals($file . (substr($file, -3) == 'php' ? '' : '.php'), $req->getFilename());
		}

		


		
	}

	/**
	 * @todo Implement testGet().
	 */
	public function testGet() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestedPage().
	 */
	public function testGetRequestedPage() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestPath().
	 */
	public function testGetRequestPath() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestCollectionPath().
	 */
	public function testGetRequestCollectionPath() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestCollectionID().
	 */
	public function testGetRequestCollectionID() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestTask().
	 */
	public function testGetRequestTask() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetRequestTaskParameters().
	 */
	public function testGetRequestTaskParameters() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsIncludeRequest().
	 */
	public function testIsIncludeRequest() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetIncludeType().
	 */
	public function testGetIncludeType() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetFilename().
	 */
	public function testGetFilename() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetBlock().
	 */
	public function testGetBlock() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetAuxiliaryData().
	 */
	public function testGetAuxiliaryData() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetPackageHandle().
	 */
	public function testGetPackageHandle() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetRequestTask().
	 */
	public function testSetRequestTask() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetCurrentPage().
	 */
	public function testSetCurrentPage() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testGetCurrentPage().
	 */
	public function testGetCurrentPage() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetRequestTaskParameters().
	 */
	public function testSetRequestTaskParameters() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testSetCollectionPath().
	 */
	public function testSetCollectionPath() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>