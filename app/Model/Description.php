<?php
App::uses('AppModel', 'Model');
/**
 * Dictionary Model
 *
 */
class Description extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'description';

	public $hasMany = array(
		'HashResult' => array(
			'className' => 'HashResult',
			'foreignKey' => 'description_id',
			'dependent' => true
		)
	);
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		)
	);

/**
 * Saving analyis
 * @param String $analysis contains analysis of test in string value.
 * @return boolean true if successful, false otherwise.
 */
	public function saveAnalysis($analysis) {
		$data = array(
			'Description' => array(
				'user_id' => $this->_getUser('id'),
				'description' => $analysis
			)
		
		);
		$this->create();
		if($this->save($data)) {
			return true;
		}
		return false;
	}

/**
 * Delete all child results
 */
	public function beforeDelete($cascade = true) {
		$conditions = array(
				'HashResult.description_id' => $this->id

		);
		$this->HashResult->deleteAll($conditions);
		return true;
	}
}
