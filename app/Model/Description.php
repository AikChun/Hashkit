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
	public $useTable = 'Description';

	public $hasMany = array(
		'HashResult' => array(
			'className' => 'HashResult',
			'foreignKey' => 'user_id',
		)
	);

}