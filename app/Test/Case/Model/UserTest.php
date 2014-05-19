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
		$this->HashTest = ClassRegistry::init('HashTest');
		$this->HashResult = ClassRegistry::init('HashResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);
		unset($this->HashTest);
		unset($this->HashResult);

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
		//WHEN $email == aikchun616@gmail.com
		$email = 'aikchun616@gmail.com';
		//THEN execute checkEmailExists();
		$emailExists = $this->User->checkEmailExists($email);
		//Expect TRUE
		$this->assertTrue($emailExists);
		
		//WHEN $email == hashkitproject@gmail.com <= non-existant email in fixture
		$email = 'hashkitproject@gmail.com';
		//THEN execute checkEmailExists();
		$emailExists = $this->User->checkEmailExists($email);
		//Expect False
		$this->assertFalse($emailExists);
	}

/**
 * testCheckEmailPasswordWorks method
 *
 * @return void
 */
	public function testCheckEmailPasswordWorks() {
		//WHEN $email == aikchun616@gmail.com
		$email = 'aikchun616@gmail.com';
		//THEN execute checkEmailExists();
		$emailExists = $this->User->checkEmailExists($email);
		//Expect TRUE
		$this->assertTrue($emailExists);
		
		//WHEN $email == hashkitproject@gmail.com <= non-existant email in fixture
		$email = 'hashkitproject@gmail.com';
		//THEN execute checkEmailExists();
		$emailExists = $this->User->checkEmailExists($email);
		//Expect False
		$this->assertFalse($emailExists);
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
