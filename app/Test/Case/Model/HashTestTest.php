<?php
App::uses('HashTest', 'Model');

/**
 * HashTest Test Case
 *
 */
class HashTestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hash_test',
		'app.user',
		'app.group',
		'app.hash_result',
		'app.dictionary'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HashTest = ClassRegistry::init('HashTest');
		$this->HashAlgorithm = ClassRegistry::init('HashAlgorithm');
		$this->HashResult = ClassRegistry::init('HashResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HashTest);

		parent::tearDown();
	}

/**
 * testSaveTestResults method
 *
 * @return void
 */
	public function testSaveTestResults() {
		// // WHEN $data = data[n]['HashResult']['fields'] && $outputResult = 'Basic Hashing'
		// $plaintext = 'Enemies';
		// $hashAlgorithmId = 2;
		// $conditions = array(
		// 	'conditions' => array(
		// 		'HashAlgorithm.id' => $hashAlgorithmId
		// 	),
		// 	'fields' => array(
		// 		'HashAlgorithm.name'
		// 	)
		// );
		// $searchResult = $this->HashAlgorithm->find('first', $conditions);
		// $hashAlgorithmName = strtolower($searchResult['HashAlgorithm']['name']);
		// $data = array(
		// 	'user_id' => 10,
		// 	'1' => array(
		// 		'HashResult' => array(
		// 			'plaintext' => $plaintext,
		// 			'message_digest' => hash($hashAlgorithmName, $plaintext),
		// 			'hash_algorithm_id' => $hashAlgorithmId
		// 		)
		// 	)

		// );
		// // THEN execute saveTestResults
		// $saveSuccessful = $this->HashTest->saveTestResults($data);
		// // EXPECT 
		// $this->assertTrue($saveSuccessful);
	}

/**
 * testComputeDigests method
 *
 * @return void
 */
	public function testComputeDigests() {
	}

/**
 * testCheckAndInsertIntoDictionary method
 *
 * @return void
 */
	public function testCheckAndInsertIntoDictionary() {
		// WHEN $data = 'Hello There'
		$data = 'Hello There';

		// THEN EXECUTE checkAndInsertIntoDictionary
		$saveSuccessful = $this->HashTest->checkAndInsertIntoDictionary($data);

		// EXPECT
		$this->assertFalse($saveSuccessful);

	}

}
