
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
		if($this->request->is('post')) {
			if(empty($this->request->data['HashTests']['HashAlgorithm'])) {
				$this->Session->setFlash('You did not select any algorithms!');
				return $this->redirect(array('action' => 'basic_hashing'));
			}
			$data = $this->request->data['HashTests'];
			$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
			$selectedAlgorithms = array();
			//$this->log($data);
			foreach ($data as $key => $hashId) {
				$searchCondition = array(
					'conditions' => array(
						'HashAlgorithm.id' => $data['HashAlgorithm'] 
					),
					'fields' => array('id','name')
				);
				$selectedAlgorithms = $HashAlgorithmModel->find('all', $searchCondition);
			}
			$this->Session->write('selectedAlgorithms' , $selectedAlgorithms);
			//$this->log("before basic hashing");
			return $this->redirect(array('controller' => 'HashTests' ,'action' => 'basic_hashing_input'));
			
		}
		$conditions = array(
			'fields' => array('name', 'id' ),
			'order' => array('name ASC')
		);
			

		$this->Session->write('selectedAlgorithms' , '');
		$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
		$data = $HashAlgorithmModel->find('all', $conditions);
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
		//$this->log("Enter basic hashing");
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');

		if($this->request->is('post')) {
			$data = $this->request->data;
			//$this->log($data);

			if (!empty($data['HashTests']['plaintext'])) {

				$output = HashingLib::computeDigests($selectedAlgorithms, $data['HashTests']['plaintext']);
                $output[0]['HashResult']['user_id'] = $this->Auth->user('id');
	            $this->Session->write('output', $output);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'basic_hashing_result'));
			}

			elseif (!empty($data['HashTests']['file_upload']) && 
	             is_uploaded_file($data['HashTests']['file_upload']['tmp_name']) &&
	             ($data['HashTests']['file_upload']['type'] == 'text/plain')) 
			{

			$lineArray = file($data['HashTests']['file_upload']['tmp_name']);

			$output = HashingLib::computeDigests($selectedAlgorithms, $lineArray);

            foreach($output as $key => $row) {
                $output[$key]['HashResult']['user_id'] = $this->Auth->user('id');
            }

            $this->Session->write('output', $output);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'basic_hashing_result'));
        	
		}
	}
}

/**
 * To allow the user choose the algorithms that is to analyzed.
 */
	public function compute_and_compare() {
		if($this->request->is('post')) {
			if(empty($this->request->data['HashTests']['HashAlgorithm'])) {
				$this->Session->setFlash('You did not select any algorithms!');
				return $this->redirect(array('action' => 'compute_and_compare'));
			} elseif (count($this->request->data['HashTests']['HashAlgorithm']) == 1) {
				$this->Session->setFlash('Please select more than one algorithmn');
				return $this->redirect(array('action' => 'compute_and_compare'));
			}
			$data = $this->request->data['HashTests'];
			$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
			$selectedAlgorithms = array();
			foreach ($data as $key => $hashId) {
				$searchCondition = array(
					'conditions' => array(
						'HashAlgorithm.id' => $data['HashAlgorithm'] 
					),
					'fields' => array('id','name')
				);
				$selectedAlgorithms = $HashAlgorithmModel->find('all', $searchCondition);
			}
			$this->Session->write('selectedAlgorithms' , $selectedAlgorithms);
			return $this->redirect(array('controller' => 'HashTests' ,'action' => 'compute_and_compare_input'));
			
		}
		$conditions = array(
			'fields' => array('name', 'id' ),
			'order' => array('name ASC')
		);

		$this->Session->write('selectedAlgorithms' , '');
		$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
		$data = $HashAlgorithmModel->find('all', $conditions);
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
                $output[0]['HashResult']['user_id'] = $this->Auth->user('id');

                $outputResult = $this->compareDigests($output);
				//$this->log($outputResult);
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

            foreach($output as $key => $row) {
                $output[$key]['HashResult']['user_id'] = $this->Auth->user('id');
            }

			$outputResult = $this->compareDigests($output);
			//$this->log($outputResult);
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
			//$this->log('This is result.');
			//$this->log($result);

			$collision = '';
			if($dup != FALSE) {
				foreach($dup as $key => $num) {
					$collision .= $ptline[$num] . " " . $mdline[$num] . "\n";
				}
			}

			if($dup != FALSE) {
				$hashResult['HashResult']['description'] = 'There is collision detected at: ' . "\n" . $collision;
			} elseif ($dup == FALSE) {
				$hashResult['HashResult']['description'] = 'No collision detected';
			}

			$options = array(
				'conditions' => array(
					'HashAlgorithm.id' => $hashResult['HashResult']['hash_algorithm_id']
					),
				'fields' => array('HashAlgorithm.speed','HashAlgorithm.security',
					'HashAlgorithm.collision_resistance','HashAlgorithm.preimage_resistance',
					'HashAlgorithm.2nd_preimage_resistance')

				);
			$searchResult = array();
			$searchResult = $hashAlgorithmModel->find('first', $options);

			//$this->log($searchResult);
	
			$hashResult['HashResult']['speed'] = $searchResult['HashAlgorithm']['speed'];
			$hashResult['HashResult']['security'] = $searchResult['HashAlgorithm']['security'];
			$hashResult['HashResult']['collision_resistance'] = $searchResult['HashAlgorithm']['collision_resistance'];
			$hashResult['HashResult']['preimage_resistance'] = $searchResult['HashAlgorithm']['preimage_resistance'];
			$hashResult['HashResult']['2nd_preimage_resistance'] = $searchResult['HashAlgorithm']['2nd_preimage_resistance'];

			
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
		//$this->log($recommendAlgo);

		return $analysis;
	}

/**
 * To look up plaintext equivalent when entering message digest
 *
 */
	public function reverseHashLookUp() {

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
        $this->log($result);
        $this->set('result', $result);
	
		if($this->request->is('post')) {
			
			$data = $this->request->data;
			//$this->log($data);
			
			$conditions = array(
				'conditions' => array('HashAlgorithmV1.name'=> $data['HashTests']['HashAlgorithm'])
			);
			$resultfromdatabase = $HashAlgorithmV1Model->find('first', $conditions);

			//$this->log($resultfromdatabase['HashAlgorithmV1']['name']);
			
			 if((int)$resultfromdatabase['HashAlgorithmV1']['base'] > 1 ){

			 		if(!empty($data['HashTests']['customized_algorithm_base']) || !empty($data['HashTests']['customized_algorithm_exponent'])) {
						if(!empty($data['HashTests']['hash_value1'])) {
							$this->Session->setFlash('Please choose a hash algorithm in the drop down list or choose customized and enter the required values');
							return $this->redirect(array('action' => 'calculate_probability_of_collision'));
						}
					}else{
							$K = bcpow((int)$resultfromdatabase['HashAlgorithmV1']['base'],(int)$resultfromdatabase['HashAlgorithmV1']['exponent']);
					}		
			 }else{

					if(empty($data['HashTests']['customized_algorithm_base']) || empty($data['HashTests']['customized_algorithm_exponent'])) {
						if(empty($data['HashTests']['hash_value1'])) {	
							$this->Session->setFlash('Please enter both the base and exponent values for the hash function.');
							return $this->redirect(array('action' => 'calculate_probability_of_collision'));
						}
					}

					if(!empty($data['HashTests']['customized_algorithm_base']) || !empty($data['HashTests']['customized_algorithm_exponent'])) {
						if(!empty($data['HashTests']['hash_value1'])) {
							$this->Session->setFlash('Please enter only either the base and exponent values or the amount of hash values.');
							return $this->redirect(array('action' => 'calculate_probability_of_collision'));
						}
					}

					if(empty($data['HashTests']['customized_algorithm_base']) && empty($data['HashTests']['customized_algorithm_exponent'])) {
						if(!empty($data['HashTests']['hash_value1'])) {
							$K = (int)$data['HashTests']['hash_value1'];
						}
					}else{
						//total of hash value which we want to match(birthday) 
						$K = pow((int)$data['HashTests']['customized_algorithm_base'],(int)$data['HashTests']['customized_algorithm_exponent']);	
					}
			}

			if(empty($data['HashTests']['required_base']) || empty($data['HashTests']['required_exponent'])) {
				if(empty($data['HashTests']['hash_value'])) {
					$this->Session->setFlash('You did not enter either the base and exponent values or the amount of hash values.');
					return $this->redirect(array('action' => 'calculate_probability_of_collision'));
				}
			}

			if(!empty($data['HashTests']['required_base']) || !empty($data['HashTests']['required_exponent'])) {
				if(!empty($data['HashTests']['hash_value'])) {
					$this->Session->setFlash('Please enter only either the base and exponent values or the amount of hash values.');
					return $this->redirect(array('action' => 'calculate_probability_of_collision'));
				}
			}

			if(empty($data['HashTests']['required_base']) && empty($data['HashTests']['required_exponent'])) {
				if(!empty($data['HashTests']['hash_value'])) {
					$N = (int)$data['HashTests']['hash_value'];
				}
			}else{
					//total sample space(number of people)
					$N = pow((int)$data['HashTests']['required_base'],(int)$data['HashTests']['required_exponent']);	
			}

			$this->log($K);	

			$firstexpEqu = (- pow($N,2)) / (2 * $K);
			//$this->log($firstexpEqu);
			$probability = (1 - exp($firstexpEqu)) * 100;
			$samplespace = $N;
			$totalhash = $K;

			$this->Session->write('probability', $probability);
			$this->Session->write('samplespace', $samplespace);
			$this->Session->write('totalhash', $totalhash);
			
			$this->generate_ninety_nine_percentage_proability($N,$K);	
			$this->redirect(array('controller' => 'HashResults', 'action' => 'calculate_probability_of_collision_result'));
		
		}
		
	}

/**
 * To calcuate the number of hashes needed to get a 99% probability of getting a collision 
 *  
 */
	public function generate_ninety_nine_percentage_proability($N, $K){
		$check = true;

		while($check == true) :
			$firstexpEqu = (- pow($N,2)) / (2 * $K);
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
					$N += 1000000;	
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
        $condition = array (
        	'conditions' => array('HashAlgorithmV1.base ' => 2)
        	);
        $result = $HashAlgorithmV1Model->find('all', $conditions);
        $this->log($result);
        $this->set('result', $result);
		if($this->request->is('post')) {
			$data = $this->request->data;
			$dataInput = array();
			$output = array();

			$this->set('data', $data);
			$originalMD = hash(strtolower($data['HashTests']['HashAlgorithm']), $data['HashTests']['plaintext']);
			//$secondMD = hash(strtolower($data['HashTests']['HashAlgorithm']), ++$data['HashTests']['plaintext']);


			echo $originalMD."<br>";

			//echo $secondMD."<br>";

			$teststring = $data['HashTests']['plaintext'];
			echo $teststring."<br>";
			echo decbin(ord($teststring));
		}		
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

			//$this->log($resultfromdatabase);
        	$this->Session->write('resultfromdatabase', $resultfromdatabase);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'hash_analyser_result'));
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
		return $wordhashlist;

	}

	public function compare_array($count, $array1, $array2) {
		$found = 0;
		for($i = 1; $i <= $count; $i++ ){
			for($j = 1; $j <= $count; $j++){
				$this->log($array1[$i]["hash"]);
				$this->log($array2[$j]["hash"]);
				if($array1[$i]["hash"] == $array2[$i]["hash"]){
					$found += 1;
				}
			}
		}
		return $found;
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
    					$listOfhashes = $this->generate_array(32,$information['HashAlgorithmV1']['name']);
        				$this->log($listOfhashes);
        				$secondlistOfhashes = $this->generate_array(32,$information['HashAlgorithmV1']['name']);
        				$this->log($secondlistOfhashes);
        				$this->log($this->compare_array(32, $listOfhashes, $secondlistOfhashes));	
        				break;
    			case 64:
        				
        				break;
    			case 128:
        				
        				break;
			}
			
		}	
	}

}
	
