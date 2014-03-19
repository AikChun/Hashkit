<?php
App::uses('AppController', 'Controller');
/**
 * HashAlgorithms Controller
 *
 * @property HashAlgorithm $HashAlgorithm
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HashAlgorithmsController extends AppController {

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
		$this->HashAlgorithm->recursive = 0;
		$this->set('hashAlgorithms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {
		// if (!$this->HashAlgorithm->exists($id)) {
		// 	throw new NotFoundException(__('Invalid hash algorithm'));
		// }
		// $options = array('conditions' => array('HashAlgorithm.' . $this->HashAlgorithm->primaryKey => $id));
		// $this->set('hashAlgorithm', $this->HashAlgorithm->find('first', $options));
		if($this->request->is('post')) {
			$data = $this->request->post;
			$this->redirect(array('controller' => 'HashResults' ,'action' => 'inputPlaintext'));


		}
		$conditions = array(
			'fields' => array('name'),
			'order' => array('name ASC')
		);
			
		$data = $this->HashAlgorithm->find('all', $conditions);
		$this->set('data', $data);

		

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HashAlgorithm->create();
			if ($this->HashAlgorithm->save($this->request->data)) {
				$this->Session->setFlash(__('The hash algorithm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hash algorithm could not be saved. Please, try again.'));
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
		if (!$this->HashAlgorithm->exists($id)) {
			throw new NotFoundException(__('Invalid hash algorithm'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HashAlgorithm->save($this->request->data)) {
				$this->Session->setFlash(__('The hash algorithm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hash algorithm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HashAlgorithm.' . $this->HashAlgorithm->primaryKey => $id));
			$this->request->data = $this->HashAlgorithm->find('first', $options);
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
		$this->HashAlgorithm->id = $id;
		if (!$this->HashAlgorithm->exists()) {
			throw new NotFoundException(__('Invalid hash algorithm'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HashAlgorithm->delete()) {
			$this->Session->setFlash(__('The hash algorithm has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hash algorithm could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
