<?php
App::uses('AppModel', 'Model');
/**
 * HashResult Model
 *
 */
class HashResult extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hash_result';
	public $hasOne = array(
		'HashAlgorithm' => array(
			'className' => 'HashAlgorithm',
			'foreignKey' => 'id'
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id',
			'counterCache' => true
		)
	);
    public $belongsTo = array('Description');

/**
 * Saving hash result with its description
 * @param array $data contains array('HashResult' => array('fields' => ), 'Description' => array())
 * @return boolean true when save correctly. False otherwise.
 */
	public function saveWithDescription($data) {
		$descriptionModel = ClassRegistry::init('Description');
		$analysis = 'testing analysis';
		$saveDescriptionSuccessful = $descriptionModel->saveAnalysis($analysis);
		if($saveDescriptionSuccessful) {
			$descriptionId = $descriptionModel->getLastInsertID();
			foreach($data as $key => $result) {
				$data[$key]['HashResult']['description_id'] = $descriptionId;
			}
			$this->create();
			$this->saveMany($data);
		}
		return true; 
	}
}
