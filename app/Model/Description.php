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

	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id',
		)
	);

	public $hasMany = array(
		'HashResult' => array(
			'className' => 'HashResult',
			'foreignKey' => 'id',
		)
	);

}