<?php
/**
 * DictionaryFixture
 *
 */
class DictionaryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'plaintext' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SHA1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MD5' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'plaintext' => 'Lorem ipsum dolor sit amet',
			'SHA1' => 'Lorem ipsum dolor sit amet',
			'MD5' => 'Lorem ipsum dolor sit amet'
		),
	);

}
