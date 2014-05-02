<?php
App::uses('HashResult', 'Model');
App::uses('Description', 'Model');

/**
 * HashResult Test Case
 *
 */
class HashResultTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hash_result',
		'app.description',
		'app.user',
		'app.group',
		'app.hash_algorithm'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HashResult = ClassRegistry::init('HashResult');
		$this->Description = ClassRegistry::init('Description');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HashResult);
		unset($this->Description);
		parent::tearDown();
	}

/**
 * testSavingWithDescription method
 *
 * @return void
 */
	public function testSavingWithDescription() {
		// Given the following data and analysis
// MOCK the _getUser method to always return 23 because we always expect that
		$this->Description = $this->getMockForModel('Description', array('_getUser'));
		$this->Description->expects($this->once())
		->method('_getUser')
		->will($this->returnValue(12));
		$data = array(
			'HashResult' => array(
				'plaintext' => 'hello world',
				'message_digest' => '2aae6c35c94fcfb415dbe95f408b9ce91ee846ed',
				'hash_algorithm_id' => 1
			)
		);
		$analysis = 'No collision detected';
		
		// When execute savingWithDescription
		$result = $this->HashResult->savingWithDescription($data, $analysis);

		// Then we expect the following.
		$this->assertTrue($result);
	}

}
