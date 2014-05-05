<?php
App::uses('AppModel', 'Model');
/**
 * HashTest Model
 *
 */
class HashTest extends AppModel {

	public $hasMany = array(
		'HashResult' => array(
			'className' => 'HashResult',
			'foreignKey' => 'hash_test_id',
			'dependent' => true
		)
	);

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		)
	)
}
