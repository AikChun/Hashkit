<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
		'app.hash_test',
		'app.hash_result'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

/**
 * testParentNode method
 *
 * @return void
 */
	public function testParentNode() {
	}

/**
 * testSafeRead method
 *
 * @return void
 */
	public function testSafeRead() {
	}

/**
 * testBindNode method
 *
 * @return void
 */
	public function testBindNode() {
	}

/**
 * testCheckEmailExists method
 *
 * @return void
 */
	public function testCheckEmailExists() {
		//data
		$email = 'aikchun616@gmail.com';

		$checkSuccessful = $this->User->checkEmailExists($email);

		$this->assertTrue($checkSuccessful);
	}

/**
 * testCheckEmailPasswordWorks method
 *
 * @return void
 */
	public function testCheckEmailPasswordWorks() {
	}

/**
 * testCreateToken method
 *
 * @return void
 */
	public function testCreateToken() {
	}

/**
 * testFindXORCreateToken method
 *
 * @return void
 */
	public function testFindXORCreateToken() {
	}

/**
 * testSendToken method
 *
 * @return void
 */
	public function testSendToken() {
	}

/**
 * testResetPassword method
 *
 * @return void
 */
	public function testResetPassword() {
	}

}
