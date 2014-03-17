<?php
App::uses('AppController', 'Controller');
/**
 * HashProcesses Controller
 *
 * @property HashProcess $HashProcess
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HashProcessesController extends AppController {

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
		$this->HashProcess->recursive = 0;
		$this->set('hashProcesses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		// default code.
		// if (!$this->HashProcess->exists($id)) {
		// 	throw new NotFoundException(__('Invalid hash process'));
		// }
		// $options = array('conditions' => array('HashProcess.' . $this->HashProcess->primaryKey => $id));
		// $this->set('hashProcess', $this->HashProcess->find('first', $options));
		// default code.


	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HashProcess->create();
			if ($this->HashProcess->save($this->request->data)) {
				$this->Session->setFlash(__('The hash process has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hash process could not be saved. Please, try again.'));
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
		if (!$this->HashProcess->exists($id)) {
			throw new NotFoundException(__('Invalid hash process'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HashProcess->save($this->request->data)) {
				$this->Session->setFlash(__('The hash process has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hash process could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HashProcess.' . $this->HashProcess->primaryKey => $id));
			$this->request->data = $this->HashProcess->find('first', $options);
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
		$this->HashProcess->id = $id;
		if (!$this->HashProcess->exists()) {
			throw new NotFoundException(__('Invalid hash process'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HashProcess->delete()) {
			$this->Session->setFlash(__('The hash process has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hash process could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function hashingPlaintext() {
		// $plaintext = $this->request->data();

		// $this->log('Hi.');

		if ($this->request->is('post')) {
			$data = $this->request->is('post');
			echo $data;
			$messageDigest = md5($data);
			$this->set('result', $messageDigest);
			$this->render('result');
			// $this->HashProcess->create();
			// if ($this->HashProcess->save($this->request->data)) {
			// 	$this->Session->setFlash(__('The hash process has been saved.'));
			// 	return $this->redirect(array('action' => 'index'));
			// } else {
			// 	$this->Session->setFlash(__('The hash process could not be saved. Please, try again.'));
			// }
		}
	}
}
