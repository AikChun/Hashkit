<?php
class HashingLib {
	public static function computeDigests($selectedAlgorithms, $fileData) {

		$computed = array();
		$output = array();
		
		if (is_string($fileData)) {
			HashingLib::checkDictionary($fileData);
			foreach($selectedAlgorithms as $key => $algorithm ) {
				//CakeLog::write('debug',print_r('in string compute',true));
				$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $fileData);
				
				$computed['HashResult']['plaintext'] = $fileData;
				$computed['HashResult']['message_digest'] = $messageDigest;
				$computed['HashResult']['hash_algorithm_id'] = $algorithm['HashAlgorithm']['id'];
				$computed['HashResult']['hash_algorithm_name'] = $algorithm['HashAlgorithm']['name'];

				array_push($output, $computed);

				// $output['HashAlgorithm'] = $selectedAlgorithms['HashAlgorithm'];
				// $output['HashResult']['plaintext'] = $plaintext;
				// $output['HashResult']['message_digest'] = $listOfMessageDigests;
			}
		
		} elseif (is_array($fileData)) {
			foreach($selectedAlgorithms as $key => $algorithm ) {
				$computed = array();
				$auth = array();

				foreach($fileData as $key => $line) {
					//CakeLog::write('debug',print_r('in array compute',true));
					//CakeLog::write('debug',print_r($line,true));

					HashingLib::checkDictionary($line);
					$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $line);

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
				//$computed['HashResult']['user_id'] = $auth['User']['group_id'];;
				array_push($output, $computed);
			}
			
		}
		return $output;
	}

/**
 * Compare the message digests to come up with an analysis
 *
 */
	protected function compareDigests($output) {
		$hashResultModel = ClassRegistry::init('HashResult');
		$hashAlgorithmModel = ClassRegistry::init("HashAlgorithm");
		$analysis = array();
		$security = -1;
		$speed = 0;
		$recommendAlgo1 = '';

		$mdline = explode("\n",$output[0]['HashResult']['message_digest']);
		$ptline = explode("\n",$output[0]['HashResult']['plaintext']);

		$dup = HashingLib::checkDuplicatesInArray($mdline);

		foreach($output as $key => $hashResult) {
			$conditions = array(
				'conditions' => array('HashResult.message_digest' => $hashResult['HashResult']['message_digest']),
				'fields' => 'id'
			);
			$result = $hashResultModel->find('first', $conditions);

			$hashResult['HashResult']['collision_index'] = $dup;

			$collision_pt = array();
			$collision_md = array();
			$collision = '';
			if($dup != FALSE) {
				foreach($dup as $key => $num) {
					array_push($collision_pt,$ptline[$num]);
				 	array_push($collision_md,$mdline[$num]);
				 	$collision .= $ptline[$num] . " " . $mdline[$num] . "\n";
				}
			}

			if($dup != FALSE) {
				$hashResult['HashResult']['description'] = 'There is collision detected at: ' . "\n";
				$hashResult['HashResult']['collision_pt'] = $collision_pt;
				$hashResult['HashResult']['collision_md'] = $collision_md;
				$hashResult['HashResult']['collision'] = $collision;
			} elseif ($dup == FALSE) {
				$hashResult['HashResult']['collision'] = $collision;
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
			//if(!empty($result['HashResult']['id'])) {
			//	$hashResult['HashResult']['analysis'] = 'This input is a very common hash value for the algorithm: '. $hashResult['HashResult']['hash_algorithm_name'];
			//} else {
			//	$hashResult['HashResult']['analysis'] = 'This is not a common hash value for algorithm: '. $hashResult['HashResult']['hash_algorithm_name'];
			//}
			array_push($analysis, $hashResult);
		}
		
		//$this->log($analysis);
		return $analysis;
	}

/**
 * Find duplicate message digests within submitted entries.
 * @array containing message in this format ($key => $row)
 * @return array containing index for duplicate message digest.
 */

	public static function checkDuplicatesInArray($array) {
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
    		return $dupIndex;
   		} else {
   			return ($duplicates);
   		}
	}

/**
 * reverse look up
 * @param $data String plaintext
 * @return Array containing the plaintext matches or false when there are no matches in the dictionary
 */
	public static function checkDictionary($data) {
		$dictionaryModel = ClassRegistry::init('Dictionary');
		$conditions = array(
			'conditions' => array(
				'Dictionary.plaintext' => $data,
			),
			'fields' => array('Dictionary.plaintext')
		);
		$checkDictionaryResult = $dictionaryModel->find('all', $conditions);
		CakeLog::write('debug',print_r('checkDictionaryResult',true));
		CakeLog::write('debug',print_r($checkDictionaryResult,true));
	
		// Insert into dictionary
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
			$dictionaryModel->save($incomingData);
			return false;
		} else {
			
			return $checkDictionaryResult;
		}
		
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

/**
 * To calcuate the number of hashes needed to get a 99% probability of getting a collision 
 *  
 */
	public function generate_ninety_nine_percentage_proability($N, $K){
		$check = true;

		while($check == true) :
			$firstexpEqu = (- bcpow($N,2)) / (2 * $K);
			$probability = (1 - exp($firstexpEqu)) * 100;
			if($probability < 99) {
				if($K < 100){
					$N += 1;
				}else if($K < 1000){
					$N += 10;
				}else if($K < 10000){
					$N += 100;
				}else if($K < 100000){
					$N += 1000;
				}else{
					$N += 100000000000000000000000000;	
				}
			}else {	
				$requiredsamplespace = $N;
				$check = false;
			}
		endwhile;
		$this->Session->write('requiredsamplespace', $requiredsamplespace);	
	} 
}


?>
