<?php
App::uses('AppController', 'Controller');
/**
 * Questionnaires Controller
 *
 * @property Questionnaire $Questionnaire
 * @property PaginatorComponent $Paginator
 */
class QuestionnairesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Questionnaire->recursive = 0;
		$this->set('questionnaires', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Questionnaire->exists($id)) {
			throw new NotFoundException(__('Invalid questionnaire'));
		}
		$options = array('conditions' => array('Questionnaire.' . $this->Questionnaire->primaryKey => $id));
		$this->set('questionnaire', $this->Questionnaire->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Questionnaire->create();
			if ($this->Questionnaire->save($this->request->data)) {
				$this->Session->setFlash(__('The questionnaire has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questionnaire could not be saved. Please, try again.'));
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
		if (!$this->Questionnaire->exists($id)) {
			throw new NotFoundException(__('Invalid questionnaire'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Questionnaire->save($this->request->data)) {
				$this->Session->setFlash(__('The questionnaire has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questionnaire could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Questionnaire.' . $this->Questionnaire->primaryKey => $id));
			$this->request->data = $this->Questionnaire->find('first', $options);
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
		$this->Questionnaire->id = $id;
		if (!$this->Questionnaire->exists()) {
			throw new NotFoundException(__('Invalid questionnaire'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Questionnaire->delete()) {
			$this->Session->setFlash(__('The questionnaire has been deleted.'));
		} else {
			$this->Session->setFlash(__('The questionnaire could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function questionnaire() {
		if($this->request->is('post')){
			$answers = $this ->Session->read('answers');
        	$data = $this->request->data;
        	$this -> log($data);
        	$this -> log($answers);

        	$this->redirect(array('controller' => 'Questionnaires', 'action' => 'questionnaire_result'));
        }

		$result = $this->Questionnaire->find('all');
		$rand_keys = array_rand($result, 3);
		$questions = array();
		$answers = array();

		for($i = 0; $i < sizeof($result); $i++){

			if (in_array("$i", $rand_keys)){			
				array_push($questions, $result[$i]['Questionnaire']['questions']);
				array_push($answers, $result[$i]['Questionnaire']['answers']);	
			}
		}
        $this->set('questions', $questions);
        $this ->Session->write('answers', $answers);
	}

	public function questionnaire_result(){
		
	}
}
