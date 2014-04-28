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
}


?>
