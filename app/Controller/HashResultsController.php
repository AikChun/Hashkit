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
				$this->Session->setFlash('The hash result has been saved.', 'alert-box', array('class'=>'alert-danger'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The hash result could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
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
				$this->Session->setFlash('The hash result has been saved.', 'alert-box', array('class'=>'alert-danger'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The hash result could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
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
			$this->Session->setFlash('The hash result has been deleted.', 'alert-box', array('class'=>'alert-danger'));
		} else {
			$this->Session->setFlash('The hash result could not be deleted. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function basic_hashing_result() {

		$output = $this->Session->read('output');
		if(!empty($output)) {
			$this->set("output", $output);
		} else {
			$output = '';
			$this->set('output', $output);
		}

		if($this->request->is('post')) {
			$choice = 1;
			$this->HashResult->writeFile($output,$choice);
			
    		$this->response->file('/webroot/' . 'hashresult.txt',array(
    			'download' => true, 'name' => 'hashresult.txt'
    			));
			
			$this->Session->setFlash('Hash result have been saved', 'alert-box', array('class'=>'alert-danger'));
		}
		//$this->Session->write('output', '');
	}

	public function compute_and_compare_result() {

		$outputResult = $this->Session->read('output');

		if (!empty($outputResult)) {
			$this->set("output", $outputResult);

		} else {
			$outputResult = '';
			$this->set('output', $outputResult);
		}
		//$this->Session->write('output', '');

		if($this->request->is('post')) {
			$choice = 2;
			$this->HashResult->writeFile($outputResult,$choice);
			
    		$this->response->file('/webroot/' . 'hashresult.txt',array(
    			'download' => true, 'name' => 'hashresult.txt'
    			));
			
			$this->Session->setFlash('Hash result have been saved', 'alert-box', array('class'=>'alert-danger'));

		}
	}

	public function show_my_test_results() {
		$this->HashResult->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('HashResult.user_id' => $this->Auth->user('id')
			)
		);
		$this->set('hashResults', $this->Paginator->paginate());
	}

	public function calculate_probability_of_collision_result() {

		if($this->referer() != FULL_BASE_URL.'/HashTests/calculate_probability_of_collision') {
			return $this->redirect(array('action' => 'calculate_probability_of_collision', 'controller' => 'HashTests'));
		}

		$base =	$this->Session->read('base');
		$exponent = $this->Session->read('exponent');
		$requiredbase =	$this->Session->read('requiredbase');
		$requiredexponent = $this->Session->read('requiredexponent');
		$customizedalgorithmbase = $this->Session->read('customizedalgorithmbase');
		$customizedalgorithmexponent = $this->Session->read('customizedalgorithmexponent');
		$condition = $this->Session->read('condition');

		$probability = $this->Session->read('probability');
		$samplespace = $this->Session->read('samplespace');
		$totalhash = $this->Session->read('totalhash');
		$requiredsamplespace = $this->Session->read('requiredsamplespace');

		$this->set('probability',$probability);
		$this->set('samplespace',$samplespace);
		$this->set('totalhash', $totalhash);
		$this->set('requiredsamplespace', $requiredsamplespace);
				
		$this->set('base',$base);
		$this->set('exponent',$exponent);
		$this->set('requiredbase',$requiredbase);
		$this->set('requiredexponent',$requiredexponent);
		$this->set('customizedalgorithmbase',$customizedalgorithmbase);
		$this->set('customizedalgorithmexponent',$customizedalgorithmexponent);
		$this->set('condition',$condition);
	}

	public function hash_analyser_result() {

		if($this->referer() != FULL_BASE_URL.'/HashTests/hash_analyser') {
			return $this->redirect(array('action' => 'hash_analyser', 'controller' => 'HashTests'));
		}

		$arrayofhashalgorithms = $this->Session->read('resultfromdatabase');
		$messagedigestlength = $this->Session->read ('messagedigestlength');
		$this->set('arrayofhashalgorithms', $arrayofhashalgorithms);
		$this->set('messagedigestlength', $messagedigestlength);

	}
	public function avalanche_effect_result() {

		if($this->referer() != FULL_BASE_URL.'/HashTests/avalanche_effect') {
			return $this->redirect(array('action' => 'avalanche_effect', 'controller' => 'HashTests'));
		}

		$output = $this->Session->read('output');

		if(!empty($output)) {
			$this->set ('output', $output);
		}
	}

	public function reverse_look_up_result() {

		if($this->referer() != FULL_BASE_URL.'/HashTests/reverse_look_up') {
			return $this->redirect(array('action' => 'reverse_look_up', 'controller' => 'HashTests'));
		}

		$data = $this->Session->read('reverseData');
		$this->Session->write('reverseData', '');
		$this->set('data',$data);
		
	}

}
