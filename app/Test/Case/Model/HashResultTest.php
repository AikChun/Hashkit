<?php
App::uses('HashResult', 'Model');

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
		'app.hash_test',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HashResult = ClassRegistry::init('HashResult');
		$this->HashTest = ClassRegistry::init('HashTest');
		$this->HashAlgorithm = ClassRegistry::init('HashAlgorithm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HashResult);

		parent::tearDown();
	}

/**
 * testWriteFile method
 *
 * @return void
 */
	public function testWriteFile() {
		//WHEN $data
		$data = array(
			'0' => array(
				'HashResult' => array(
					'plaintext' => "hello\nasd\nbye\nhello\nhey\nasd\n",
					'message_digest' => "5d41402abc4b2a76b9719d911017c592\n7815696ecbf1c96e6894b779456d330e\nbfa99df33b137bc8fb5f5407d7e58da8\n5d41402abc4b2a76b9719d911017c592\n6057f13c496ecf7fd777ceb9e79ae285\n7815696ecbf1c96e6894b779456d330e\n",
					'description' => 'There is collision detected at:',
					'collision_index' => "0 3 1 5",
					'collision_md' => "5d41402abc4b2a76b9719d911017c592\n5d41402abc4b2a76b9719d911017c592\n7815696ecbf1c96e6894b779456d330e\n7815696ecbf1c96e6894b779456d330e\n",
					'collision_pt' => "hello\nhello\nasd\nasd",
					'hash_algorithm_id' => '5',
					'hash_algorithm_name' => "MD5",
					'collision_count' => '4',
					'output_length' => '128',
					'speed' => '392.32',
					'collision_resistance' => 'Broken',
					'preimage_resistance' => 'Broken',
					'2nd_preimage_resistance' => 'Unbroken',
					'collision_bka' => '2^20.96',
					'preimage_bka' => '2^123.4',
					'2nd_preimage_bka' => 'Nil',
					'recommendation' => 'MD5'
				)
			),
			'1' => array(
				'HashResult' => array(
					'plaintext' => "Hello There\nGood bye\nScarified\nHello There\n",
					'message_digest' => "2a150b3cb9168f86749b3ea82789616d\n98758c6d3eef73cd60e687375b91f4bc\n7b27134a3e23fb9ea9a6aef3ed34b1d1\n2a150b3cb9168f86749b3ea82789616d\n",
					'hash_algorithm_id' => '4',
					'hash_algorithm_name' => "MD4",
					'collision_pt' => "Hello There\nHello There",
					'collision_md' => "32b170d923b654360f351267bf440045\n32b170d923b654360f351267bf440045",
					'collision_index' => "0 3",
					'collision_count' => '2',
					'description' => 'There is collision detected at:',
					'speed' => '540.87',
					'security' => '0',
					'collision_resistance' => 'Broken',
					'preimage_resistance' => 'Broken',
					'2nd_preimage_resistance' => 'Broken',
					'output_length' => '128',
					'collision_bka' => '3',
					'preimage_bka' => '2^69.4',
					'2nd_preimage_bka' => '2^78.4',
					'recommendation' => 'MD5'
				)
			)
		);
		$choice = 2;

		$saveResult = $this->HashResult->writeFile($data, $choice);
		$this->assertTrue($saveResult);

		$choice = 3;
		$saveResult2 = $this->HashResult->writeFile($data, $choice);
		$this->assertFalse($saveResult2);
		
	}

}
