
<?php
App::uses('AppController', 'Controller');
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
	public $components = array('Paginator', 'Session');

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function basicHashing() {
		if($this->request->is('post')) {
			$this->log($this->request->data);
			$selectedAlgorithms = $this->request->data['HashTests'];
			$this->log($selectedAlgorithms);
			$this->Session->write('selectedAlgorithms' , $selectedAlgorithms);
			return $this->redirect(array('controller' => 'HashTests' ,'action' => 'inputPlaintext'));
			
		}
		$conditions = array(
			'fields' => array('name'),
			'order' => array('name ASC')
		);
			

		$this->Session->destroy();
		$HashAlgorithmModel = ClassRegistry::init('HashAlgorithm');
		$data = $HashAlgorithmModel->find('all', $conditions);
		$this->set('data', $data);
	}

	public function inputPlaintext() {
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');
		try {
			if(empty($selectedAlgorithms['HashAlgorithm']) ) {
				throw new Exception('You did not select any hash algorithm.');
			}
			if($this->request->is('post') && !empty($selectedAlgorithms)) {
				$data = $this->request->data;
				$plaintext = $data['plaintext'];
				$output = $this->computeDigests($selectedAlgorithms, $plaintext);
				$this->Session->write('output', $output);
				$this->redirect(array('controller' => 'HashResults', 'action' => 'result'));
			}
		}catch(Exception $e) {
			$this->Session->setFlash($e->getMessage());
			$this->redirect(array('controller' => 'pages', 'action' => 'choosetest'));
		}
	}
	protected function computeDigests($selectedAlgorithms, $plaintext) {
		$listOfMessageDigests = array();
		$output = array();
		foreach($selectedAlgorithms['HashAlgorithm'] as $key => $hashName ) {
			$messageDigest = hash(strtolower($hashName), $plaintext);

			array_push($listOfMessageDigests, $messageDigest);
		}
		$output['HashAlgorithm'] = $selectedAlgorithms['HashAlgorithm'];
		$output['HashResult']['plaintext'] = $plaintext;
		$output['HashResult']['message_digest'] = $listOfMessageDigests;
		
		return $output;

	}
}
