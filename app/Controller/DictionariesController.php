<?php
App::uses('AppController', 'Controller');
/**
 * Dictionaries Controller
 *
 * @property Dictionary $Dictionary
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DictionariesController extends AppController {

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
		$this->Dictionary->recursive = 0;
		$this->set('dictionaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dictionary->exists($id)) {
			throw new NotFoundException(__('Invalid dictionary'));
		}
		$options = array('conditions' => array('Dictionary.' . $this->Dictionary->primaryKey => $id));
		$this->set('dictionary', $this->Dictionary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dictionary->create();
			if ($this->Dictionary->save($this->request->data)) {
				$this->Session->setFlash(__('The dictionary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictionary could not be saved. Please, try again.'));
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
		if (!$this->Dictionary->exists($id)) {
			throw new NotFoundException(__('Invalid dictionary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dictionary->save($this->request->data)) {
				$this->Session->setFlash(__('The dictionary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dictionary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dictionary.' . $this->Dictionary->primaryKey => $id));
			$this->request->data = $this->Dictionary->find('first', $options);
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
		$this->Dictionary->id = $id;
		if (!$this->Dictionary->exists()) {
			throw new NotFoundException(__('Invalid dictionary'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dictionary->delete()) {
			$this->Session->setFlash(__('The dictionary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dictionary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
    }

}

