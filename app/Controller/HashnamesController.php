<?php
App::uses('AppController', 'Controller');
/**
 * Hashnames Controller
 *
 * @property Hashname $Hashname
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HashnamesController extends AppController {

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
		$this->Hashname->recursive = 0;
		$this->set('hashnames', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hashname->exists($id)) {
			throw new NotFoundException(__('Invalid hashname'));
		}
		$options = array('conditions' => array('Hashname.' . $this->Hashname->primaryKey => $id));
		$this->set('hashname', $this->Hashname->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hashname->create();
			if ($this->Hashname->save($this->request->data)) {
				$this->Session->setFlash(__('The hashname has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hashname could not be saved. Please, try again.'));
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
		if (!$this->Hashname->exists($id)) {
			throw new NotFoundException(__('Invalid hashname'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hashname->save($this->request->data)) {
				$this->Session->setFlash(__('The hashname has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hashname could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hashname.' . $this->Hashname->primaryKey => $id));
			$this->request->data = $this->Hashname->find('first', $options);
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
		$this->Hashname->id = $id;
		if (!$this->Hashname->exists()) {
			throw new NotFoundException(__('Invalid hashname'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hashname->delete()) {
			$this->Session->setFlash(__('The hashname has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hashname could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
