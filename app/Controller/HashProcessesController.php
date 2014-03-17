<?php
App::uses('AppController', 'Controller');
/**
 * Hashprocesses Controller
 *
 * @property Hashprocess $Hashprocess
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HashprocessesController extends AppController {

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
		$this->Hashprocess->recursive = 0;
		$this->set('hashprocesses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hashprocess->exists($id)) {
			throw new NotFoundException(__('Invalid hashprocess'));
		}
		$options = array('conditions' => array('Hashprocess.' . $this->Hashprocess->primaryKey => $id));
		$this->set('hashprocess', $this->Hashprocess->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hashprocess->create();
			if ($this->Hashprocess->save($this->request->data)) {
				$this->Session->setFlash(__('The hashprocess has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hashprocess could not be saved. Please, try again.'));
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
		if (!$this->Hashprocess->exists($id)) {
			throw new NotFoundException(__('Invalid hashprocess'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hashprocess->save($this->request->data)) {
				$this->Session->setFlash(__('The hashprocess has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hashprocess could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hashprocess.' . $this->Hashprocess->primaryKey => $id));
			$this->request->data = $this->Hashprocess->find('first', $options);
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
		$this->Hashprocess->id = $id;
		if (!$this->Hashprocess->exists()) {
			throw new NotFoundException(__('Invalid hashprocess'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hashprocess->delete()) {
			$this->Session->setFlash(__('The hashprocess has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hashprocess could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function hashingPlaintext() {
		if($this->request->is('post')) {
			$data = $this->request->is('post');
			$messageDigest = md5($data);
			$this->set('result', $messageDigest);
			$this->render('result');
		}
	}
}
