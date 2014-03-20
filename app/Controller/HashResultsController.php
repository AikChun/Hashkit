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


	public function result() {
		$output = $this->Session->read('output');
		$this->Session->destroy();
		$this->set("output", $output);
	}

	public function showMyTestResults(){
		$this->HashResult->recursive = 0;
		$this->set('hashResults', $this->Paginator->paginate());
	}

}
