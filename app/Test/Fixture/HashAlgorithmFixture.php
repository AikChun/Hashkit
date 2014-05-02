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
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 1,
			'security' => 1,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 2,
			'security' => 2,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 3,
			'security' => 3,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 4,
			'security' => 4,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 5,
			'security' => 5,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 6,
			'security' => 6,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 7,
			'security' => 7,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 8,
			'security' => 8,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 9,
			'security' => 9,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit a',
			'speed' => 10,
			'security' => 10,
			'collision_resistance' => 'Lorem ip',
			'preimage_resistance' => 'Lorem ip',
			'2nd_preimage_resistance' => 'Lorem ip',
			'collision_bka' => 'Lorem ip',
			'preimage_bka' => 'Lorem ip',
			'2nd_preimage_bka' => 'Lorem ip',
			'output_length' => 10
		),
	);

}
