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
	public $belongsTo = array(
		'Description' => array(
			'className' => 'Description',
			'foreignKey' => 'description_id'
		)
	);

/**
 * Saving hash result with its description
 * @param array $data contains array('HashResult' => array('fields' => ), 'Description' => array())
 * @return boolean true when save correctly. False otherwise.
 */
	public function saveWithDescription($data) {
		$descriptionModel = ClassRegistry::init('Description');
		$analysis = $data[0]['HashResult']['description'];
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


/**
 * Saving hash result with its description
 * @param array data contains HashResult 
 * @param array analysis is a string value of the actual analysis
 * @return boolean true when save correctly. False otherwise.
 */
	public function savingWithDescription($data, $analysis) {
		$saveDescriptionSuccessful = $this->Description->saveAnalysis($analysis);
		if($saveDescriptionSuccessful) {
			$descriptionId = $this->Description->getLastInsertID();
			foreach($data as $key => $result) {
				$data[$key]['HashResult']['description_id'] = $descriptionId;
			}
			$this->create();
			$this->saveMany($data);
		}
		return true; 
	}
}
