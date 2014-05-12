<?php
/**
 * HashAlgorithmFixture
 *
 */
class HashAlgorithmFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'speed' => array('type' => 'float', 'null' => false, 'default' => null),
		'security' => array('type' => 'integer', 'null' => false, 'default' => null),
		'collision_resistance' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'preimage_resistance' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'2nd_preimage_resistance' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'collision_bka' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'preimage_bka' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'2nd_preimage_bka' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'output_length' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'SHA1',
			'speed' => '333.29',
			'security' => '2',
			'collision_resistance' => 'Broken',
			'preimage_resistance' => 'Unbroken',
			'2nd_preimage_resistance' => 'Unbroken',
			'collision_bka' => '2^60',
			'preimage_bka' => 'Nil',
			'2nd_preimage_bka' => 'Nil',
			'output_length' => '160'
		),
		array(
			'id' => '2',
			'name' => 'MD5',
			'speed' => '392.32',
			'security' => '1',
			'collision_resistance' => 'Broken',
			'preimage_resistance' => 'Broken',
			'2nd_preimage_resistance' => 'Unbroken',
			'collision_bka' => '2^20.96',
			'preimage_bka' => '2^123.4',
			'2nd_preimage_bka' => 'Nil',
			'output_length' => '128'
		),
		array(
			'id' => '3',
			'name' => 'MD2',
			'speed' => '5.43',
			'security' => '1',
			'collision_resistance' => 'Broken',
			'preimage_resistance' => 'Broken',
			'2nd_preimage_resistance' => 'Unbroken',
			'collision_bka' => '2^63.3',
			'preimage_bka' => '2^73',
			'2nd_preimage_bka' => 'Nil',
			'output_length' => '128'
		),
		array(
			'id' => '4',
			'name' => 'MD4',
			'speed' => '540.87',
			'security' => '0',
			'collision_resistance' => 'Broken',
			'preimage_resistance' => 'Broken',
			'2nd_preimage_resistance' => 'Broken',
			'collision_bka' => '3',
			'preimage_bka' => '2^69.4',
			'2nd_preimage_bka' => '2^78.4',
			'output_length' => '128'
		),
		array(
			'id' => '5',
			'name' => 'SHA256',
			'speed' => '169.49',
			'security' => '3',
			'collision_resistance' => 'Unbroken',
			'preimage_resistance' => 'Unbroken',
			'2nd_preimage_resistance' => 'Unbroken',
			'collision_bka' => 'Nil',
			'preimage_bka' => 'Nil',
			'2nd_preimage_bka' => 'Nil',
			'output_length' => '256'
		),
	);

}
