<?php
/**
 * HashTestFixture
 *
 */
class HashTestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'analysis' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'analysis' => 'There is collision detected at: 
',
			'user_id' => '10',
			'created' => '2014-05-08 18:16:21',
			'modified' => '2014-05-08 18:16:21'
		),
		array(
			'id' => '2',
			'analysis' => 'There is collision detected at: 
',
			'user_id' => '10',
			'created' => '2014-05-08 18:22:20',
			'modified' => '2014-05-08 18:22:20'
		),
	);

}
