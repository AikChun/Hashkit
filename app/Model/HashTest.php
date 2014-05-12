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
		//$this->log($fileData);
		//$this->log($selectedAlgorithms);

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
		//$this->log($output);
		return $output;
	}

/**
 * Compare the message digests to come up with an analysis
 *
 */
	public function compareDigests($output) {
		$hashResultModel = ClassRegistry::init('HashResult');
		$hashAlgorithmModel = ClassRegistry::init("HashAlgorithm");
		$analysis = array();
		$security = -1;
		$speed = 0;
		$recommendAlgo1 = '';

		$mdline = explode("\n",$output[0]['HashResult']['message_digest']);
		$ptline = explode("\n",$output[0]['HashResult']['plaintext']);

		$dup = $this->checkDuplicatesInArray($mdline);
		$collisionCount = count($dup);

		foreach($output as $key => $hashResult) {
			$conditions = array(
				'conditions' => array('HashResult.message_digest' => $hashResult['HashResult']['message_digest']),
				'fields' => 'id'
			);
			$result = $hashResultModel->find('first', $conditions);

			$hashResult['HashResult']['collision_pt'] = '';
			$hashResult['HashResult']['collision_md'] = '';
			$hashResult['HashResult']['collision_index'] = '';

			if($dup != FALSE) {
				$hashResult['HashResult']['collision_count'] = $collisionCount;
				foreach($dup as $key => $num) {

					$hashResult['HashResult']['description'] = 'There is collision detected at: ' . "\n";
					if(empty($hashResult['HashResult']['collision_pt'])) {
						$hashResult['HashResult']['collision_pt'] = $ptline[$num];	
					} else {
						$hashResult['HashResult']['collision_pt'] .= "\n" . $ptline[$num];
					}

					if(empty($hashResult['HashResult']['collision_md'])) {
						$hashResult['HashResult']['collision_md'] = $mdline[$num];	
					} else {
						$hashResult['HashResult']['collision_md'] .= "\n" . $mdline[$num];
					}
						$hashResult['HashResult']['collision_index'] .= $num . " ";

				}
			} elseif ($dup == FALSE) {
				$hashResult['HashResult']['collision_count'] = 0;
				$hashResult['HashResult']['description'] = 'No collision detected';
			}

			$options = array(
				'conditions' => array(
					'HashAlgorithm.id' => $hashResult['HashResult']['hash_algorithm_id']
					),
				'fields' => array('HashAlgorithm.speed','HashAlgorithm.security',
					'HashAlgorithm.collision_resistance','HashAlgorithm.preimage_resistance',
					'HashAlgorithm.2nd_preimage_resistance','HashAlgorithm.output_length',
					'HashAlgorithm.collision_bka','HashAlgorithm.preimage_bka',
					'HashAlgorithm.2nd_preimage_bka')

				);
			$searchResult = array();
			$searchResult = $hashAlgorithmModel->find('first', $options);
	
			$hashResult['HashResult']['speed'] = $searchResult['HashAlgorithm']['speed'];
			$hashResult['HashResult']['security'] = $searchResult['HashAlgorithm']['security'];
			$hashResult['HashResult']['collision_resistance'] = $searchResult['HashAlgorithm']['collision_resistance'];
			$hashResult['HashResult']['preimage_resistance'] = $searchResult['HashAlgorithm']['preimage_resistance'];
			$hashResult['HashResult']['2nd_preimage_resistance'] = $searchResult['HashAlgorithm']['2nd_preimage_resistance'];
			$hashResult['HashResult']['output_length'] = $searchResult['HashAlgorithm']['output_length'];
			$hashResult['HashResult']['collision_bka'] = $searchResult['HashAlgorithm']['collision_bka'];
			$hashResult['HashResult']['preimage_bka'] = $searchResult['HashAlgorithm']['preimage_bka'];
			$hashResult['HashResult']['2nd_preimage_bka'] = $searchResult['HashAlgorithm']['2nd_preimage_bka'];
			
			if ($hashResult['HashResult']['security'] > $security) {
				$security = $hashResult['HashResult']['security'];
				$recommendAlgo = $hashResult['HashResult']['hash_algorithm_name'];
				$speed = $hashResult['HashResult']['speed'];
			} elseif ($hashResult['HashResult']['security'] == $security) {
				//if($hashResult['HashResult']['speed'] > $speed) {
					$recommendAlgo1 = $hashResult['HashResult']['hash_algorithm_name'];
					$recommendAlgo .= ', ' . $recommendAlgo1;
				//}
			}

			$hashResult['HashResult']['recommendation'] = $recommendAlgo;
			array_push($analysis, $hashResult);
		}
		return $analysis;
	}

/**
 * Find duplicate message digests within submitted entries.
 * @array containing message in this format ($key => $row)
 * @return array containing index for duplicate message digest.
 */

	public function checkDuplicatesInArray($array) {
		$count = 0;
		$dup = array();
		$dupIndex = array();
    	$duplicates=FALSE;
    	foreach($array as $k=>$i) {
        	if(!isset($value_{$i})) {
          	  $value_{$i}=TRUE;
        	}
        	else {
            	$duplicates|=TRUE; 
            	array_push($dup, $i);    
            	//array_push($dup, $count);  
        	}
    	}

    	foreach ($dup as $q => $w) {
    		foreach ($array as $a => $s) {
    			if($w == $s) {
    				array_push($dupIndex, $count);
    			}
    			$count += 1;
    		}
    		$count = 0;
    	}

    	if ($duplicates == TRUE) {
    		//$this->log($dupIndex);
    		return $dupIndex;
   		} else {
   			return ($duplicates);
   		}
	}

	public static function computeAvalanche($firstMD, $secondMD){
		CakeLog::write('debug',$firstMD);
		CakeLog::write('debug',$secondMD);
		$lengthOfMD = strlen ($firstMD);
		$bitDiff = array();
		$result = array();
		$count = 0;
		for ($i = 0; $i < $lengthOfMD; $i++){
			if (strcmp($firstMD[$i], $secondMD[$i]) != 0) {
				$count++;
			}
			else{
				array_push($bitDiff, $i);
			}
		}

		$percent = $count / $lengthOfMD * 100;
		$percent = round ($percent, 2);

		$result['Percent'] = $percent;
		$result['BitDiff'] = $bitDiff;
		CakeLog::write('debug',$result);
		return $result;
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

/**
 * find plaintext with MessageDigest
 * @param $data array containing ['message_digest'] and ['hash_algorithm']
 * @return mixed false if there are no such record found in database or array containing plaintext is return
 */ 
	public static function matchPlaintextWithMessageDigest($data) {
		$dictionaryModel = ClassRegistry::init('Dictionary');
		$conditions = array(
			'conditions' => array(
				'Dictionary.'.$data['hash_algorithm_name'] => $data['message_digest'],
			),
			'fields' => array('Dictionary.plaintext')
		);
		$checkDictionaryResult = $dictionaryModel->find('all', $conditions);
		// Insert into dictionary
		if(empty($checkDictionaryResult)) {

			return false;
		} else {
			return $checkDictionaryResult;
		}
			
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
