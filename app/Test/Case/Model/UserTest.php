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
		// WHEN $id = 10;
		$id = 10;

		// THEN execute safeRead();
		$data = $this->User->safeRead($id);
		
		
		
		// EXPECTED To have array containing user's information without password field
		$this->recursive = 0;
		// $conditions = array(
			'conditions' => array(
				'User.id' => $id
			),
			'contain' => null
		);
		$result = $this->User->find('first', $conditions);
		$user = $result['User'];
		unset($user['password']);
		unset($result['User']);
		$expectedData = array_merge($user, $result);
		$this->assertEqual($data, $expectedData);



	}

/**
 * testBindNode method
 *
 * @return void
 */
	public function testBindNode() {
		// WHEN $user == array(
		//	'User' => array(
		//		'group_id' => '1'
		//	)
		// );
		$user = array(
			'User' => array(
				'group_id' => '1'
			)
		);

		// THEN execute bindNode();
		$data = $this->User->bindNode($user);

		$expected = array(
			'model' => 'Group',
			'foreign_key' => '1'
		);
		$this->assertEqual($data, $expected);
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
		// WHEN $data == array( 
		// 'email' => 'aikchun616@gmail.com',
		// 'name' => 'AikChun',
		// 'password' => 'hello'
		// );
		$data = array( 
			'User' => array(
				'email' => 'aikchun616@gmail.com',
				'name' => 'AikChun',
				'password' => 'hello'
			)
		);

		//THEN execute checkEmailExists();
		$passwordMatch = $this->User->checkEmailPasswordWorks($data);
		//Expect TRUE
		$this->assertTrue($passwordMatch);
		
		// WHEN $email == hashkitproject@gmail.com <= non-existant email in fixture
		// $data = array( 
		// 'email' => 'ian@gmail.com',
		// 'name' => 'ian',
		// 'password' => 'password'
		// );
		$data2 = array( 
			'User' => array(
				'email' => 'ian@gmail.com',
				'name' => 'ian',
				'password' => 'password'
			)
		);
		//THEN execute checkEmailExists();
		$passwordMatch2 = $this->User->checkEmailPasswordWorks($data2);
		//Expect False
		$this->assertFalse($passwordMatch2);
	}

/**
 * testCreateToken method
 *
 * @return void
 */
	public function testCreateToken() {
		// We are testing for the if the tokens are created according to the time they're created

		//WHEN $email == aikchun616@gmail.com 
		$email = 'aikchun616@gmail.com';
		//THEN execute createToken();
		$token1 = $this->User->createToken($email);
		
		// Allow time counter to advance by a second
		sleep(1);
		//WHEN $email == 'aikchun616@gmail.com';
		//THEN execute createToken();
		$token2 = $this->User->createToken($email);

		$this->assertNotEqual($token1, $token2);
	}

/**
 * testFindXORCreateToken method
 *
 * @return void
 */
	public function testFindXORCreateToken() {
		// WHEN $email == 'aikchun616@gmail.com';
		$email = 'aikchun616@gmail.com';

		// THEN execute findXORCreateToken();
		$data = $this->User->findXORCreateToken($email);

		// EXPECT 
		$dataInFixture = array(
			'id' => '10',
			'name' => 'AikChun',
			'token' => '4571ae82ce05f63d3c3d38d386abf16d39302921',
			'email' => 'aikchun616@gmail.com'
		);

		$this->assertEqual($data, $dataInFixture);

		// Test for token creation
		// WHEN $email == 'ian@gmail.com'
		$email2 = 'ian@gmail.com';

		// THEN execute findXORCreateToken();
		$data2 = $this->User->findXORCreateToken($email2);


		// EXPECT
		$dataInFixture2 = array(
			'id' => '12',
			'name' => 'ian',
			'email' => 'ian@gmail.com',
			'token' => '',
		);

		$this->assertNotEqual($data2, $dataInFixture2);
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
		// WHEN $data
		$data = array(
			'User' => array(
				'id' => '10',
				'name' => 'Aik Chun',
				'email' => 'aikchun616@gmail.com',
				'new_password' => 'Hello',
				'confirm_new_password' => 'Hello'
			)
		);

		// THEN execute resetPassword()
		$result = $this->User->resetPassword($data);
		unset($result['User']['modified']);

		// EXPECT to be true
		$expectedData = array(
			'User' => array(
				'id' => '10',
				'name' => 'Aik Chun',
				'email' => 'aikchun616@gmail.com',
				'new_password' => 'Hello',
				'confirm_new_password' => 'Hello',
				'password' => '6ad8e1ba173d4728b89e5f0b1a2f12f342406c6f',
				'token' => null
			)
		);
		$this->assertEqual($result, $expectedData);
		
		// WHEN $data
		$data = array(
			'User' => array(
				'id' => '10',
				'name' => 'Aik Chun',
				'email' => 'aikchun616@gmail.com',
				'new_password' => 'Hello',
				'confirm_new_password' => 'Hello123'
			)
		);

		// THEN execute resetPassword()
		$result = $this->User->resetPassword($data);

		// EXPECT to be true
		$this->assertFalse($result);
	}

}
