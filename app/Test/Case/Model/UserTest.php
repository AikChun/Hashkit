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
		// We are testing for the if the tokens are created according to the time they're created

		//WHEN $email == aikchun616@gmail.com AND $date = '2001-03-10 17:16:18';
		$email = 'aikchun616@gmail.com';
		//THEN execute createToken();
		$token1 = $this->User->createToken($email);
		//Expect ccef18d2c4b5edbe8220180e3d3bf0cd93de391a 
		
		// Allow time counter to advance by a second
		sleep(1);
		//WHEN $email == aikchun616@gmail.com AND $date = '2001-03-10 17:16:18';
		$email = 'aikchun616@gmail.com';
		//THEN execute createToken();
		$token2 = $this->User->createToken($email);
		//Expect ccef18d2c4b5edbe8220180e3d3bf0cd93de391a 

		$this->assertNotEqual($token1, $token2);
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
