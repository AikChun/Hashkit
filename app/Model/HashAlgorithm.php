<?php
App::uses('AppModel', 'Model');
/**
 * HashAlgorithm Model
 *
 */
class HashAlgorithm extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $hasMany = array(
		'HashResult' => array(
			'className' => 'HashResult'
		)
	);
}
