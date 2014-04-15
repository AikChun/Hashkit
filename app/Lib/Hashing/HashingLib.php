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
					//CakeLog::write('debug',print_r($line,true));

					$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $line);

					if(empty($computed['HashResult']['plaintext'])){
						$computed['HashResult']['plaintext'] = $line . "\n";	
					} else {
						$computed['HashResult']['plaintext'] .= $line . "\n";
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

}
?>