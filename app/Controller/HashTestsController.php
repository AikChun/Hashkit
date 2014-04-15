
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
			$this->log($data);
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
			$this->log("before basic hashing");
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
		$this->log("Enter basic hashing");
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');

		if($this->request->is('post')) {
			$data = $this->request->data;

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

			$mdline = explode("\n",$output[0]['HashResult']['message_digest']);
			//$this->log($mdline);

			$dup = HashTestsController::checkDuplicatesInArray($mdline);
			//$this->log($dup);
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
				return $this->redirect(array('action' => 'computeAndCompare'));
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
			return $this->redirect(array('controller' => 'HashTests' ,'action' => 'computeAndCompareInput'));
			
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
	public function computeAndCompareInput() {
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');
		if($this->request->is('post')) {
			$data = $this->request->data;
			$output = $this->computeDigests($selectedAlgorithms, $data['HashTests']);
			$outputResult = $this->compareDigests($output);

			$this->Session->write('output', $outputResult);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'computeAndCompareResult'));

		}

	}

/**
 * Compute the hashed value of the input plaintext.
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
		$analysis = array();
		foreach($output as $key => $hashResult) {
			$conditions = array(
				'conditions' => array('HashResult.message_digest' => $hashResult['HashResult']['message_digest']),
				'fields' => 'id'
			);
			$result = $hashResultModel->find('first', $conditions);
			$this->log('This is result.');
			$this->log($result);


			if(!empty($result['HashResult']['id'])) {
				$hashResult['HashResult']['analysis'] = 'This input is a very common hash value for the algorithm: '. $hashResult['HashResult']['hash_algorithm_name'];
			} else {
				$hashResult['HashResult']['analysis'] = 'This is not a common hash value for algorithm: '. $hashResult['HashResult']['hash_algorithm_name'];
			}
			array_push($analysis, $hashResult);
		}
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
		if($this->request->is('post')) {
			$data = $this->request->data;
			
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

			if(empty($data['HashTests']['customized_algorithm_base']) || empty($data['HashTests']['customized_algorithm_exponent'])) {
					$this->Session->setFlash('Please enter both the base and exponent values for the hash function.');
					return $this->redirect(array('action' => 'calculate_probability_of_collision'));
			}

			if(empty($data['HashTests']['required_base']) && empty($data['HashTests']['required_exponent'])) {
				if(!empty($data['HashTests']['hash_value'])) {
					$N = (int)$data['HashTests']['hash_value'];
				}
			}else{
					//total sample space(number of people)
					$N = pow((int)$data['HashTests']['required_base'],(int)$data['HashTests']['required_exponent']);	
			}

			//total of hash value which we want to match(birthday) 
			$K = pow((int)$data['HashTests']['customized_algorithm_base'],(int)$data['HashTests']['customized_algorithm_exponent']);
			//$firstexpEqu = ((- $N) * ($N - 1)) / (2 * $K); 
			$firstexpEqu = (- pow($N,2)) / (2 * $K);
			$probability = (1 - exp($firstexpEqu)) * 100;

			$this->Session->write('probability', $probability);
			$this->redirect(array('controller' => 'HashResults', 'action' => 'calculate_probability_of_collision_result'));
		}
		
	}
 
	public function avalanche_effect() {
        
        $HashAlgorithmV1Model = ClassRegistry::init('HashAlgorithmV1');
        $result = $HashAlgorithmV1Model->find('all');
        $this->log($result);
        $this->set('result', $result);
		if($this->request->is('post')) {
			$data = $this->request->data;
			$this->set('data', $data);

		}
			
	}

}
