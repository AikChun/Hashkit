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
			'id' => '1',
			'plaintext' => 'Hello There',
			'SHA1' => '546e25453a78ef2cee079187fd65bfa2495c2ec7',
			'MD5' => '32b170d923b654360f351267bf440045'
		),
		array(
			'id' => '2',
			'plaintext' => 'Good bye',
			'SHA1' => '6a7641a6610b62fd8111babe5963cbb949871747',
			'MD5' => 'fc9516d5dfcd680ef15f087041155fe8'
		),
		array(
			'id' => '3',
			'plaintext' => 'Scarified',
			'SHA1' => '8a0979fdf5afda41cda40a5e9559a1cf19866178',
			'MD5' => '7fafbfc50032f66abf91935fd50c95cb'
		),
		array(
			'id' => '4',
			'plaintext' => 'Hello again',
			'SHA1' => '43ce0c8e7e28680735241ad3e5550aa361b96f53',
			'MD5' => '3d67b96cde18c245b65a83ecaff2c906'
		),
		array(
			'id' => '5',
			'plaintext' => 'Hello Everyone',
			'SHA1' => '0318d138e57dfdca894d3074c112a1caa1c36bd9',
			'MD5' => 'ba25d791469f06b7e03cffe1adec69c6'
		),
	);

}
