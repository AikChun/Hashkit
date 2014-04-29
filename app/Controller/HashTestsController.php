
<?php
App::uses('AppController', 'Controller');
App::uses('HashingLib', 'Lib/Hashing');

/**
 * HashTests Controller
 *
 * @property HashTest $HashTest
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HashTestsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Email'); 
	public $helpers=array('Html','Form','Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->_configureAllowedActions();
	}

/**
 * determine which actions require authentication or allow anonymous access
 *
 * @return void
 **/
	 protected function _configureAllowedActions() {
		$allowedActions = array(
		);
		$this->Auth->allow($allowedActions);
	 }

/**
 * Basic Hashing method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

/**
 * User is to choose the algorithms that he/she wants to hash the plaintext.
 */
	public function basic_hashing() {
		$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');

		$this->Session->setFlash("HELLO WORLD", "flash_custom");

		if($this->request->is('post')) {
			if(empty($this->request->data['HashTests']['HashAlgorithm'])) {
				$this->Session->setFlash('You did not select any algorithms!');
				return $this->redirect(array('action' => 'basic_hashing'));
			}
			$postData = $this->request->data['HashTests']['HashAlgorithm'];

			$conditions = array(
				'conditions' => array(
						'HashAlgorithm.name' => $postData
				),
				'fields' => array(
					'HashAlgorithm.id',
					'HashAlgorithm.name'
				)
			);
			$retrievedData = $HashAlgorithmModel->find('all', $conditions);
			$this->Session->write('selectedAlgorithms' , $retrievedData);
			return $this->redirect(array('controller' => 'HashTests' ,'action' => 'basic_hashing_input'));
			
		}
		$conditions = array(
			'fields' => array('name', 'id' ),
			'order' => array('name ASC')
		);
			

		$this->Session->write('selectedAlgorithms' , '');
		$retrievedData = $HashAlgorithmModel->find('all', $conditions);
		
		$data = array();
		foreach($retrievedData as $key => $hashAlgorithm) {
			$data[$hashAlgorithm['HashAlgorithm']['name']] = $hashAlgorithm['HashAlgorithm']['name'];
		}
		$this->set('data', $data);
	}

	/**
	 * Allow user to input plaintext that is to be hashed.
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
    		return $dupIndex;
   		} else {
   			return ($duplicates);
   		}
	}

	public function basic_hashing_input() {
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');

		if($this->request->is('post')) {
			$data = $this->request->data;
			//$this->log($data);

			if (!empty($data['HashTests']['plaintext'])) {
				$output = HashingLib::computeDigests($selectedAlgorithms, $data['HashTests']['plaintext']);
	            $this->Session->write('output', $output);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'basic_hashing_result'));
			}

			elseif (!empty($data['HashTests']['file_upload']) && 
	             is_uploaded_file($data['HashTests']['file_upload']['tmp_name']) &&
	             ($data['HashTests']['file_upload']['type'] == 'text/plain')) 
			{

			$lineArray = file($data['HashTests']['file_upload']['tmp_name']);

			$output = HashingLib::computeDigests($selectedAlgorithms, $lineArray);

            $this->Session->write('output', $output);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'basic_hashing_result'));
        	
		}
	}
}

/**
 * To allow the user choose the algorithms that is to analyzed.
 */
	public function compute_and_compare() {
		$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
		if($this->request->is('post')) {
			if(empty($this->request->data['HashTests']['HashAlgorithm'])) {
				$this->Session->setFlash('You did not select any algorithms!');
				return $this->redirect(array('action' => 'compute_and_compare'));
			} elseif (count($this->request->data['HashTests']['HashAlgorithm']) == 1) {
				$this->Session->setFlash('Please select more than one algorithmn');
				return $this->redirect(array('action' => 'compute_and_compare'));
			}
			
			$data = $this->request->data['HashTests']['HashAlgorithm'];
			$selectedAlgorithms = array();
			$conditions = array(
				'conditions' => array('HashAlgorithm.name' => $data),
				'fields' => array('HashAlgorithm.id', 'HashAlgorithm.name')
			);
			$selectedAlgorithms = $HashAlgorithmModel->find('all', $conditions);
			$this->Session->write('selectedAlgorithms' , $selectedAlgorithms);
			return $this->redirect(array('controller' => 'HashTests' ,'action' => 'compute_and_compare_input'));
			
		}
		$conditions = array(
			'fields' => array('name', 'id' ),
			'order' => array('name ASC')
		);

		$this->Session->write('selectedAlgorithms' , '');
		$searchData = $HashAlgorithmModel->find('all', $conditions);
		$data = array();
		foreach($searchData as $key => $algorithm) {
			$data[$algorithm['HashAlgorithm']['name']] = $algorithm['HashAlgorithm']['name'];
		}
		$this->set('data', $data);
	}

/**
 * Input page of the compute and compare functionality of the project.
 */
	public function compute_and_compare_input() {
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');
		if($this->request->is('post')) {
			$data = $this->request->data;
			//$this->log($data);

			if (!empty($data['HashTests']['plaintext'])) {
				
				$output = HashingLib::computeDigests($selectedAlgorithms, $data['HashTests']['plaintext']);
				
                $outputResult = $this->compareDigests($output);
				$this->Session->write('output', $outputResult);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'compute_and_compare_result'));
	            //$this->Session->write('output', $output);
				//$this->redirect(array('controller' => 'HashResults', 'action' => 'compute_and_compare_result'));
			}

			elseif (!empty($data['HashTests']['file_upload']) && 
	             is_uploaded_file($data['HashTests']['file_upload']['tmp_name']) &&
	             ($data['HashTests']['file_upload']['type'] == 'text/plain')) 
			{

				$lineArray = file($data['HashTests']['file_upload']['tmp_name']);

				$output = HashingLib::computeDigests($selectedAlgorithms, $lineArray);

				$outputResult = $this->compareDigests($output);
				$this->Session->write('output', $outputResult);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'compute_and_compare_result'));

			}
		}
	}

/**
 * Compute the hashed value of the input plaintext.
 * @param Array $selectedAlgorithms array-type $key => algorithm name
 * @param String $hashTestForm plaintext from the user
 * @return Array $output $key => array('HashAlgorithm' column names => value)
 */
	protected function computeDigests($selectedAlgorithms, $hashTestForm) {
		$computed = array();
		$output = array();
		foreach($selectedAlgorithms as $key => $algorithm ) {
			$messageDigest = hash(strtolower($algorithm['HashAlgorithm']['name']), $hashTestForm['plaintext']);

			$computed['HashResult']['plaintext'] = $hashTestForm['plaintext'];
			$computed['HashResult']['message_digest'] = $messageDigest;
			$computed['HashResult']['hash_algorithm_id'] = $algorithm['HashAlgorithm']['id'];
			$computed['HashResult']['hash_algorithm_name'] = $algorithm['HashAlgorithm']['name'];
			$computed['HashResult']['user_id'] = $hashTestForm['id'];
			array_push($output, $computed);
		}
		// $output['HashAlgorithm'] = $selectedAlgorithms['HashAlgorithm'];
		// $output['HashResult']['plaintext'] = $plaintext;
		// $output['HashResult']['message_digest'] = $listOfMessageDigests;
		
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
		$security = 0;
		$speed = 0;

		$mdline = explode("\n",$output[0]['HashResult']['message_digest']);
		$ptline = explode("\n",$output[0]['HashResult']['plaintext']);

		$dup = HashTestsController::checkDuplicatesInArray($mdline);

		foreach($output as $key => $hashResult) {
			$conditions = array(
				'conditions' => array('HashResult.message_digest' => $hashResult['HashResult']['message_digest']),
				'fields' => 'id'
			);
			$result = $hashResultModel->find('first', $conditions);

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
				if($hashResult['HashResult']['speed'] > $speed) {
					$recommendAlgo = $hashResult['HashResult']['hash_algorithm_name'];
				}
			}

			$hashResult['HashResult']['recommendation'] = $recommendAlgo;
			//if(!empty($result['HashResult']['id'])) {
			//	$hashResult['HashResult']['analysis'] = 'This input is a very common hash value for the algorithm: '. $hashResult['HashResult']['hash_algorithm_name'];
			//} else {
			//	$hashResult['HashResult']['analysis'] = 'This is not a common hash value for algorithm: '. $hashResult['HashResult']['hash_algorithm_name'];
			//}
			array_push($analysis, $hashResult);
		}
		
		$this->log($analysis);
		return $analysis;
	}

/**
 * To look up plaintext equivalent when entering message digest
 *
 */
	public function reverse_look_up() {
		$hashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
		$searchResult = $hashAlgorithmModel->find('all', array('fields' => array('HashAlgorithm.name')));
		$preparedData = Hash::extract($searchResult, '{n}.HashAlgorithm.name');
		$data = array();
		foreach($preparedData as $key => $algorithm) {
			$data[strtolower($algorithm)] = $algorithm;
		}

		$this->set('data', $data);

		if($this->request->is('post')) {
			$data = $this->request->data['HashTests'];
			$result = HashingLib::matchPlaintextWithMessageDigest($data);
			$this->log($result);
			$this->Session->write('reverseData', $result );
			$this->redirect('/HashResults/reverse_look_up_result');
		}
	}

/**
 * To calcuate the probability of the collision occurence based on the birthday paradox
 *  
 */
	public function calculate_probability_of_collision() {
		
		$HashAlgorithmV1Model = ClassRegistry::init('HashAlgorithmV1');
		
		$findConditions = array(
			'conditions' => array('HashAlgorithmV1.name !=' => 'customised' ),
			'order' => 'HashAlgorithmV1.name ASC'
		);
        $result = $HashAlgorithmV1Model->find('all', $findConditions);
        $findCustomize = $HashAlgorithmV1Model->find('first', array('conditions' => array('HashAlgorithmV1.name' => 'customised')));
        array_push($result, $findCustomize);
        $this->set('result', $result);
	
		if($this->request->is('post')) {
			
			$data = $this->request->data;
			//$this->log($data);
			
			//$this->log($resultfromdatabase['HashAlgorithmV1']['name']);
			try{	
				
				$base = 0;
				$exponent = 0;	
				$requiredbase = 0;
				$requiredexponent = 0;
				$customizedalgorithmbase = 0;
				$customizedalgorithmexponent = 0;

				 if(empty($data['HashTests']['HashAlgorithm'])){
				 	throw new Exception ('Please choose a hash algorithm in the drop down list or choose customized and enter the required values');
				 }else{
					$conditions = array(
						'conditions' => array('HashAlgorithmV1.name'=> $data['HashTests']['HashAlgorithm'])
					);
					$resultfromdatabase = $HashAlgorithmV1Model->find('first', $conditions);
			 
					if((int)$resultfromdatabase['HashAlgorithmV1']['base'] > 0 ){

				 		if(empty($data['HashTests']['customized_algorithm_base']) && empty($data['HashTests']['customized_algorithm_exponent'])) {
							if(empty($data['HashTests']['hash_value1'])) {
								$K = bcpow((int)$resultfromdatabase['HashAlgorithmV1']['base'],(int)$resultfromdatabase['HashAlgorithmV1']['exponent']);
							}
						}else {throw new Exception ('Please choose a hash algorithm in the drop down list or choose customized and enter the required values');}	
					}else{

						if(empty($data['HashTests']['customized_algorithm_base']) || empty($data['HashTests']['customized_algorithm_exponent'])) {
							if(empty($data['HashTests']['hash_value1'])) {
								throw new Exception ('Please enter both the base and exponent values for the hash function.');
							}
						}

						if(!empty($data['HashTests']['customized_algorithm_base']) || !empty($data['HashTests']['customized_algorithm_exponent'])) {
							if(!empty($data['HashTests']['hash_value1'])) {
								throw new Exception ('You did not enter either the base and exponent values or the amount of hash values');
							}
						}

						if(empty($data['HashTests']['customized_algorithm_base']) && empty($data['HashTests']['customized_algorithm_exponent'])) {
							if(!empty($data['HashTests']['hash_value1'])) {
								$K = (int)$data['HashTests']['hash_value1'];
							}
						}else{
							//total of hash value which we want to match(birthday) 
							$K = bcpow((int)$data['HashTests']['customized_algorithm_base'],(int)$data['HashTests']['customized_algorithm_exponent']);	
						}
					}

					if(empty($data['HashTests']['required_base']) || empty($data['HashTests']['required_exponent'])) {
						if(empty($data['HashTests']['hash_value'])) {
							throw new Exception ('You did not enter either the base and exponent values or the amount of hash values');	
						}
					}

					if(!empty($data['HashTests']['required_base']) || !empty($data['HashTests']['required_exponent'])) {
						if(!empty($data['HashTests']['hash_value'])) {
							throw new Exception ('You did not enter either the base and exponent values or the amount of hash values');
						}
					}

					if(empty($data['HashTests']['required_base']) && empty($data['HashTests']['required_exponent'])) {
						if(!empty($data['HashTests']['hash_value'])) {
							$N = (int)$data['HashTests']['hash_value'];
						}
					}else{
							//total sample space(number of people)
							$N = bcpow((int)$data['HashTests']['required_base'],(int)$data['HashTests']['required_exponent']);	
					}

					$firstexpEqu = (- pow($N,2)) / (2 * $K);
					$probability = (1 - exp($firstexpEqu)) * 100;
					$total_sample_size_ninety_nine_percentage = (bcsqrt(log(1 - 99/100) * - 2 * $K));
					$samplespace = $N;
					$totalhash = $K;
					
					$base = (int)$resultfromdatabase['HashAlgorithmV1']['base'];
					$exponent = (int)$resultfromdatabase['HashAlgorithmV1']['exponent'];	
					$requiredbase = (int)$data['HashTests']['required_base'];
					$requiredexponent = (int)$data['HashTests']['required_exponent'];
					$customizedalgorithmbase = (int)$data['HashTests']['customized_algorithm_base'];
					$customizedalgorithmexponent = (int)$data['HashTests']['customized_algorithm_exponent'];
					
					$this->Session->write('base',$base);
					$this->Session->write('exponent',$exponent);
					$this->Session->write('requiredbase',$requiredbase);
					$this->Session->write('requiredexponent',$requiredexponent);
					$this->Session->write('customizedalgorithmbase',$customizedalgorithmbase);
					$this->Session->write('customizedalgorithmexponent',$customizedalgorithmexponent);
					
					$this->Session->write('probability', $probability);
					$this->Session->write('samplespace', $samplespace);
					$this->Session->write('totalhash', $totalhash);
					$this->Session->write('requiredsamplespace', $total_sample_size_ninety_nine_percentage);	
					//$this->generate_ninety_nine_percentage_proability($N,$K);	
					$this->redirect(array('controller' => 'HashResults', 'action' => 'calculate_probability_of_collision_result'));
				 }//end of if else 
					
			
			}catch(Exception $e) {
					$this->Session->setFlash($e->getMessage(),'flash_custom');
					$this->redirect(array('action' => 'calculate_probability_of_collision'));
			}
		
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
 
	public function avalanche_effect() {
        
        $HashAlgorithmV1Model = ClassRegistry::init('HashAlgorithmV1');
     
        $conditions = array(
			'conditions' => array('HashAlgorithmV1.name !=' => 'customised' ),
			'order' => 'HashAlgorithmV1.name ASC'
		);

        $result = $HashAlgorithmV1Model->find('all', $conditions);
        $this->set('result', $result);
		if($this->request->is('post')) {
			$data = $this->request->data;
			$output = array();

			if(empty($data['HashTests']['HashAlgorithm'])) {
				$this->Session->setFlash('You did not select any algorithms!');
				return $this->redirect(array('action' => 'avalanche_effect'));
			}
		
			$HelloMD = hash(strtolower($data['HashTests']['HashAlgorithm']), 'Hello');
			$HellnMD = hash(strtolower($data['HashTests']['HashAlgorithm']), 'Helln');

			$ComputerMD = hash(strtolower($data['HashTests']['HashAlgorithm']), 'Computer');
			$ComputesMD = hash(strtolower($data['HashTests']['HashAlgorithm']), 'Computes');

			$ScienceMD = hash(strtolower($data['HashTests']['HashAlgorithm']), 'Science');
			$SciencdMD = hash(strtolower($data['HashTests']['HashAlgorithm']), 'Sciencd');

			$HelloPercent = $this -> compute_avalanche($HelloMD, $HellnMD);
			$ComputerPercent = $this -> compute_avalanche($ComputerMD, $ComputesMD);
			$SciencePercent = $this -> compute_avalanche($ScienceMD, $SciencdMD);
			
			array_push($output, $data);
			array_push($output, $HelloMD);
			array_push($output, $HellnMD);
			array_push($output, $HelloPercent);

			array_push($output, $ComputerMD);
			array_push($output, $ComputesMD);
			array_push($output, $ComputerPercent);

			array_push($output, $ScienceMD);
			array_push($output, $SciencdMD);
			array_push($output, $SciencePercent);
			
			$this->Session->write('output', $output);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'avalanche_effect_result'));
			
		}		
	}

	public function compute_avalanche($firstMD, $secondMD){
		$lengthOfMD = strlen ($firstMD);
		$count = 0;
		for ($i = 0; $i < $lengthOfMD; $i++){
			if (strcmp($firstMD[$i], $secondMD[$i]) != 0) {
				$count++;
			}
		}
		$this -> log($count);
		$percent = $count / $lengthOfMD * 100;
		return round($percent, 2);
	}
/**
 * To read in user's input and get the hash algorithms can produce the same output. 
 *  
 */
	public function hash_analyser() {

		if($this->request->is('post')) {

			$data = $this->request->data;
			$this->set('data', $data);
			
			$messagedigestlength = strlen ($data['HashTests']['messagedigest']);
			
			//$this->log($messagedigestlength);

			$HashAlgorithmV1Model = ClassRegistry::init('HashAlgorithmV1');

			$conditions = array(
				'conditions' => array('HashAlgorithmV1.exponent' => (int)$messagedigestlength * 4)
			);

			$resultfromdatabase = $HashAlgorithmV1Model->find('all', $conditions);

			if(!empty($resultfromdatabase) && $messagedigestlength != 0) {
	        	$this->Session->write('resultfromdatabase', $resultfromdatabase);
	        	$this->Session->write('messagedigestlength', $messagedigestlength);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'hash_analyser_result'));
			}
			else{
				$messagedigestlength = 0;
				$this->Session->write('messagedigestlength', $messagedigestlength);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'hash_analyser_result'));
			}

		}	
	}

	function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0) return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
	}

	public function get_a_string($length){
	    $token = "";
	    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
	    $codeAlphabet.= "0123456789";
	    $codeAlphabet.= "!@#$^&*()";
	    for($i=0;$i<$length;$i++){
	        $token .= $codeAlphabet[$this->crypto_rand_secure(0,strlen($codeAlphabet))];
	    }
	    return $token;
	}

	public function generate_array($amount,$hash_algorithm_name) {
		$wordhashlist = array();

		//pow(2,$amount/2)
		for ($i = 1; $i <= $amount; $i++ ){
			$alphanumeric = $this->get_a_string(64);
			$singlehash = hash(strtolower($hash_algorithm_name), $alphanumeric);
			$wordhashlist[$i]['word'] = $alphanumeric;
			$wordhashlist[$i]['hash'] = $singlehash;
			//array_push($wordhashlist["hash"], $singlehash);
		}
		//array_multisort($wordhashlist[]["hash"],SORT_STRING);
		//array_multisort($wordhashlist["hash"],SORT_STRING);
		//$this->array_sort_by_column($wordhashlist, 'hash');
		usort($wordhashlist, function($a, $b) {
   			 return strcasecmp($a['hash'], $b['hash']);
		});
		$this->log($wordhashlist);
		return $wordhashlist;

	}

	public function compare_array($count, $array1, $array2) {
		$found = 0;
		$check = array(array());
		$k = 0;
		$j = 0;
		for($i = 0; $i < $count; $i++ ){
			for($j = 0; $j < $count; $j++){
				// $this->log($array1[$i]["hash"]);
				// $this->log($array2[$j]["hash"]);
				$firstletterinarray2 = $array2[$j]["hash"][0];
				$firstletterinarray1 = $array2[$i]["hash"][0];
				
				if($firstletterinarray2 != $firstletterinarray1){
						break 1;
				}else{
					if($array1[$i]["hash"] === $array2[$j]["hash"]){
					// $k += 1;
					// $check[$k]["hash"] = $array1[$i]["hash"];
					// $check[$k]["word"] = $array1[$i]["word"];
					// $k += 1;
					// $check[$j]["hash"] = $array2[$i]["hash"];
					// $check[$j]["word"] = $array2[$i]["word"];
					$found += 1;
					}	
				}
			}
		}
		return $check;
	}

	public function generate_array_and_compare($size, $hash_algorithm_name) {
		$listOfhashes = $this->generate_array($size,$hash_algorithm_name);
       	//$this->log($listOfhashes);
        $secondlistOfhashes = $this->generate_array($size,$hash_algorithm_name);
        //$this->log($secondlistOfhashes);
       	$result = $this->compare_array($size, $listOfhashes, $secondlistOfhashes);	
		return $result;
	}

	public function birthday_attack() {
		
		$HashAlgorithmV1Model = ClassRegistry::init('HashAlgorithmV1');
		
		$findConditions = array(
			'conditions' => array('HashAlgorithmV1.name !=' => 'customised' ),
			'order' => 'HashAlgorithmV1.name ASC'
		);

        $result1 = $HashAlgorithmV1Model->find('all', $findConditions);
        $this->set('result1', $result1);
		
		if($this->request->is('post')) {
			$data = $this->request->data;
			$this->set('data', $data);
			$choice = $data['HashTests']['HashAlgorithm'];

			$newConditions = array(
				'conditions' => array('HashAlgorithmV1.name' => $choice)
			);

        	$information = $HashAlgorithmV1Model->find('first', $newConditions);

			switch ($information['HashAlgorithmV1']['exponent']) {
			    case 32:
    					$birthdayattackresult = $this->generate_array_and_compare(32, $information['HashAlgorithmV1']['name']);	
        				break;
    			case 64:
        				$birthdayattackresult = $this->generate_array_and_compare(64, $information['HashAlgorithmV1']['name']);	
        				break;
    			case 128:
						$birthdayattackresult = $this->generate_array_and_compare(128, $information['HashAlgorithmV1']['name']);	
        				break;
        		case 256:
        				$birthdayattackresult = $this->generate_array_and_compare(256, $information['HashAlgorithmV1']['name']);	
        				break;
        		case 384:
        				$birthdayattackresult = $this->generate_array_and_compare(384, $information['HashAlgorithmV1']['name']);	
        				break;
        		default;
        				$this->Session->setFlash("please choose a hash algorithm");
						$this->redirect(array('action' => 'birthday_attack'));
    					break;
			}
			$this->Session->write('algorithmname', $information['HashAlgorithmV1']['name']);
			$this->Session->write('birthdayattackresult', $birthdayattackresult);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'birthday_attack_result'));
			
		}	
	}

}
