<?php
App::uses('AppModel', 'Model');
/**
 * HashAlgorithm Model
 *
 */
class HashAlgorithm extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hash_algorithm';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
