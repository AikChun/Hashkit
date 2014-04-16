<?php
class HashingLib {
	public static function computeDigests($selectedAlgorithms, $fileData) {

		$computed = array();
		$output = array();
		
		if (is_string($fileData)) {
			foreach($selectedAlgorithms as $key => $algorithm ) {
				//CakeLog::write('debug',print_r('in string compute',true));
				$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $fileData);
				
				$computed['HashResult']['plaintext'] = $fileData;
				$computed['HashResult']['message_digest'] = $messageDigest;
				$computed['HashResult']['hash_algorithm_id'] = $algorithm['HashAlgorithm']['id'];
				$computed['HashResult']['hash_algorithm_name'] = $algorithm['HashAlgorithm']['name'];
				//$computed['HashResult']['user_id'] = $authUser['group_id'];
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
					CakeLog::write('debug',print_r($line,true));

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

}
?>
