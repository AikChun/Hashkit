
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
			return $this->redirect(array('controller' => 'HashResults' ,'action' => 'inputPlaintext'));
			
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

}
