<?php
App::uses('AppController', 'Controller');
/**
 * HashResults Controller
 *
 * @property HashResult $HashResult
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HashResultsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HashResult->recursive = 0;
		$this->set('hashResults', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HashResult->exists($id)) {
			throw new NotFoundException(__('Invalid hash result'));
		}
		$options = array('conditions' => array('HashResult.' . $this->HashResult->primaryKey => $id));
		$this->set('hashResult', $this->HashResult->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HashResult->create();
			if ($this->HashResult->save($this->request->data)) {
				$this->Session->setFlash(__('The hash result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hash result could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HashResult->exists($id)) {
			throw new NotFoundException(__('Invalid hash result'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HashResult->save($this->request->data)) {
				$this->Session->setFlash(__('The hash result has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hash result could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HashResult.' . $this->HashResult->primaryKey => $id));
			$this->request->data = $this->HashResult->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HashResult->id = $id;
		if (!$this->HashResult->exists()) {
			throw new NotFoundException(__('Invalid hash result'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HashResult->delete()) {
			$this->Session->setFlash(__('The hash result has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hash result could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function inputPlaintext() {
		$selectedAlgorithms = $this->Session->read('selectedAlgorithms');
		try {
			if(empty($selectedAlgorithms['HashAlgorithm']) ) {
				throw new Exception('You did not select any hash algorithm.');
			}
			if($this->request->is('post') && !empty($selectedAlgorithms)) {
				$data = $this->request->data;
				$plaintext = $data['HashResult']['plaintext'];
				$output = $this->computeDigests($selectedAlgorithms, $plaintext);
				$this->Session->write('output', $output);
				$this->redirect(array('action' => 'result'));
			}
		}catch(Exception $e) {
			$this->Session->setFlash($e->getMessage());
			$this->redirect(array('controller' => 'pages', 'action' => 'choosetest'));
		}

	}

	public function result() {
		$output = $this->Session->read('output');
		$this->Session->destroy();
		$this->set("output", $output);
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
