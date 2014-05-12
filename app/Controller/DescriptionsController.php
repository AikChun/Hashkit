<?php
App::uses('AppController', 'Controller');
/**
 * Descriptions Controller
 *
 * @property Description $Description
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DescriptionsController extends AppController {

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
		$this->Description->recursive = 0;
		$this->set('descriptions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Description->exists($id)) {
			throw new NotFoundException(__('Invalid description'));
		}
		$options = array('conditions' => array('Description.' . $this->Description->primaryKey => $id));
		$this->set('description', $this->Description->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Description->create();
			if ($this->Description->save($this->request->data)) {
				$this->Session->setFlash(__('The description has been saved.', 'alert-box', array('class'=>'alert-danger')));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The description could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger')));
			}
		}
		$users = $this->Description->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Description->exists($id)) {
			throw new NotFoundException(__('Invalid description'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Description->save($this->request->data)) {
				$this->Session->setFlash(__('The description has been saved.', 'alert-box', array('class'=>'alert-danger')));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The description could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger')));
			}
		} else {
			$options = array('conditions' => array('Description.' . $this->Description->primaryKey => $id));
			$this->request->data = $this->Description->find('first', $options);
		}
		$users = $this->Description->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Description->id = $id;
		if (!$this->Description->exists()) {
			throw new NotFoundException(__('Invalid description'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Description->delete()) {
			$this->Session->setFlash(__('The description has been deleted.', 'alert-box', array('class'=>'alert-danger')));
		} else {
			$this->Session->setFlash(__('The description could not be deleted. Please, try again.', 'alert-box', array('class'=>'alert-danger')));
		}
		return $this->redirect(array('action' => 'index'));
	}}
