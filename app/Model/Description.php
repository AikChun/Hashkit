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
			'foreignKey' => 'id',
		)
	);
	public $belongsTo = array('User');

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
}
