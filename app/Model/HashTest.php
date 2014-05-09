<?php
App::uses('AppModel', 'Model');
/**
 * HashTest Model
 *
 */
class HashTest extends AppModel {

	public $hasMany = array(
		'HashResult' => array(
			'className' => 'HashResult',
			'foreignKey' => 'hash_test_id',
			'dependent' => true
		)
	);

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		)
	);

/**
 * This is to save test results 
 * @param array $data in the format $data[n]['HashResult']['field']
 */

	public function beforeDelete($cascade = true) {
		$conditions = array('HashResult.hash_test_id' => $this->id);
		$this->log('Logging id');
		$this->log($this->id);
		$this->HashResult->deleteAll($conditions);
		return true;
	}

	public function saveTestResults($data, $outputResult = 'Basic Hashing') {
		$hashResultModel = ClassRegistry::init('HashResult');

		if($outputResult != 'Basic Hashing') {
			$last = end($outputResult);
		

			$analysis = array(
				'HashTest' => array(
					'analysis' => $last['HashResult']['description'],
					'user_id' => $this->_getUser('id'),
					'recommendation' => $last['HashResult']['recommendation'],
					'collision_pt' => $last['HashResult']['collision_pt'],
					'collision_md' => $last['HashResult']['collision_md'],
					'collision_index' => $last['HashResult']['collision_index'],
					'collision_count' => $last['HashResult']['collision_count']
				),
			);

		} else {
			$analysis = array(
			'HashTest' => array(
				'analysis' => $outputResult,
				'user_id' => $this->_getUser('id')
			),
		);
		}

		try{
			$this->create();
			$saveTestSuccessful = $this->save($analysis);
			if(!$saveTestSuccessful) {
				throw new Exception('Unable to save test.');
			}
			$testId = $this->getLastInsertID();
			foreach($data as $key => $row) {
				$data[$key]['HashResult']['hash_test_id'] = $testId;
			}

			$hashResultModel->create();
			$saveResultSuccessful = $hashResultModel->saveAll($data);

			if(!$saveResultSuccessful) {
				throw new Exception('Unable to save Results.');
			}

		} catch(Exception $e) {
			//$this->Session->setFlash($e->getMessage(), 'alert-box', array('class'=>'alert-danger'));
			return false;
		}
		return true;

	}
/**
 * function to compute message digests
 * @param array $selectedAlgorithms contains one or many algorithm names.
 * @param mixed $fileData could be either in string or array format.
 * @return array $output in a format of $output[n]['HashResult']['attribute']
 */
	public function computeDigests($selectedAlgorithms, $fileData) {

		$computed = array();
		$output = array();

		if (is_string($fileData)) {

			foreach($selectedAlgorithms as $key => $algorithm ) {

				// compute message digests
				$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $fileData);

				// prepare individual data
				$computed['HashResult']['plaintext'] = $fileData;
				$computed['HashResult']['message_digest'] = $messageDigest;
				$computed['HashResult']['hash_algorithm_id'] = $algorithm['HashAlgorithm']['id'];
				$computed['HashResult']['hash_algorithm_name'] = $algorithm['HashAlgorithm']['name'];

				array_push($output, $computed);

			}
		
		} elseif (is_array($fileData)) {
			foreach($selectedAlgorithms as $key => $algorithm ) {
				$computed = array();
				$auth = array();

				foreach($fileData as $key => $line) {

					$line1 = trim($line);

					$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $line1);

					if(empty($computed['HashResult']['plaintext'])){
						$computed['HashResult']['plaintext'] = $line; //. "\n";	
					} else {
						$computed['HashResult']['plaintext'] .= $line; //. "\n";
					}

					if(empty($computed['HashResult']['message_digest'])){
						$computed['HashResult']['message_digest'] = $messageDigest . "\n";	
					} else {
						$computed['HashResult']['message_digest'] .= $messageDigest . "\n";
					}

				}
				$computed['HashResult']['hash_algorithm_id'] = $algorithm['HashAlgorithm']['id'];
				$computed['HashResult']['hash_algorithm_name'] = $algorithm['HashAlgorithm']['name'];
				array_push($output, $computed);
			}
			
		}
		return $output;
	}

/**
 * reverse look up
 * @param $data String plaintext
 * @return boolean returns true if a new word is added into the dictionary false otherwise.
 */
	public function checkAndInsertIntoDictionary($data) {

		$dictionaryModel = ClassRegistry::init('Dictionary');
		$conditions = array(
			'conditions' => array(
				'Dictionary.plaintext' => $data,
			),
			'fields' => array('Dictionary.plaintext')
		);
		$checkDictionaryResult = $dictionaryModel->find('all', $conditions);
	
		// if there are no such data in the dictionary
		if(!isset($checkDictionaryResult[0]['Dictionary'])) {
			$incomingData = array(
				'Dictionary' => array(
					'plaintext' => $data,
					'SHA1' => hash('sha1', $data),
					'MD5' => hash('md5', $data),
					'MD2' => hash('md2', $data),
					'MD4' => hash('md4', $data),
					'SHA256' => hash('sha256', $data)
				)
			);

			$dictionaryModel->create();

			if ($dictionaryModel->save($incomingData)) {
				return true;
			} else {
				return false;
			}
		}
		return false;
	}

	public function sendResults() {

		$recipient = array(
			'full_name' => $this->_getUser('name'),
			'email' => $this->_getUser('email')
		);

		$email = new DescriptionEmail($recipient);
		$sendEmailSuccess = $email->sendHashResult();

		return $sendEmailSuccess;
		
	}
}
