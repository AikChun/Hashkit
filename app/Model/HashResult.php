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
			'foreignKey' => 'hash_algorithm_id',
			'counterCache' => true
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'counterCache' => true
		)
	);

}
