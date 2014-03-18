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
	public function view() {
		$HashnameModel = ClassRegistry::init('Hashname');
		$conditions = array(
			'fields' => array('name'),
			'order' => array('name ASC')
		);
		$result = $HashnameModel->find('all', $conditions);
		// $data = array('Hashname' => array());
		// foreach($result as $key => $model) {
		// 	$data['Hashname'] .= $model['Hashname']['name'];
		// }
		// $this->log($data);
		$this->set('data', $result);
		// if (!$this->Hashprocess->exists($id)) {
		// 	throw new NotFoundException(__('Invalid hashprocess'));
		// }
		// $options = array('conditions' => array('Hashprocess.' . $this->Hashprocess->primaryKey => $id));
		// $this->set('hashprocess', $this->Hashprocess->find('first', $options));
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
			$data = $this->request->data;
			$this->log($data);
			if(!isset($data['Hashprocess']['plaintext'])) {
				$this->log($data);
				try{
					if(!isset($data['Hashprocess']['hashname'])) {
						throw new Exception('No algorithms were chosen!');
					}
				}
				catch(Exception $e) {
					$this->referer();
					echo 'Error occured. '. $e->getMessage();
				}
			}
			
			if(isset($data['Hashprocess']['plaintext'])) {
				$plaintext = $data['Hashprocess']['plaintext']; 
				$messageDigest = md5($plaintext);
				$this->set('result', $messageDigest);
				$this->render('result');
			}
		}
	}
}
