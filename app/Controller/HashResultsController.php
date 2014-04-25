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


	public function basic_hashing_result() {
		$output = $this->Session->read('output');
		if(!empty($output)) {
			$this->set("output", $output);
			//$saveSuccessful = $this->HashResult->saveWithDescription($output);
			 $this->HashResult->create();
			 $this->HashResult->saveMany($output);
		} else {
			$output = '';
			$this->set('output', $output);
		}
		$this->Session->write('output', '');
	}

	public function compute_and_compare_result() {
		$outputResult = $this->Session->read('output');
		if (!empty($outputResult)) {
			$this->set("output", $outputResult);
			CakeLog::write('debug',print_r('zxcvb',true));
			//$this->log($outputResult[0s]['HashResult']['collision_pt']);
			$outputResult[0]['HashResult']['description'] .= $outputResult[0]['HashResult']['collision'];
			//}
			$saveSuccessful = $this->HashResult->saveWithDescription($outputResult);
			//$this->HashResult->create();s
			//$this->HashResult->saveMany($outputResult);
		} else {
			$outputResult = '';
			$this->set('output', $outputResult);
		}
		//$this->Session->write('output', '');
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

		$base =	$this->Session->read('base');
		$exponent = $this->Session->read('exponent');
		$requiredbase =	$this->Session->read('requiredbase');
		$requiredexponent = $this->Session->read('requiredexponent');
		$customizedalgorithmbase = $this->Session->read('customizedalgorithmbase');
		$customizedalgorithmexponent = $this->Session->read('customizedalgorithmexponent');

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
	}

	public function hash_analyser_result() {
		$arrayofhashalgorithms = $this->Session->read('resultfromdatabase');
		$this->set('arrayofhashalgorithms', $arrayofhashalgorithms);

	}
}
