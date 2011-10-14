<?php

require_once dirname(__FILE__) . '/../../../web/concrete/helpers/array.php';

class ArrayHelperTest extends PHPUnit_Framework_TestCase {
	/**
	 * @var ArrayHelper
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new ArrayHelper;
	}
	
	public function testGet() {
		$arr = array(
			'test' => array(
				'test' => array(
					'paarden' => true
				)
			)
		);
		
		$this->assertTrue($this->object->get($arr, 'test[test][paarden]'));
		$this->assertTrue($this->object->get($arr, array('test', 'test', 'paarden')));
		$this->assertFalse($this->object->get($arr, 'test[test][henk]', false));
		$this->assertFalse($this->object->get($arr, array('test', 'test', 'henk'), false));
	}
	
	public function testSet() {
		$arr = array(
			'test' => array(
				'test' => array(
					'paarden' => true
				)
			)
		);
		$arr = $this->object->set($arr, 'test[test][paarden]', false);
		$this->assertFalse($arr['test']['test']['paarden']);
	}
}