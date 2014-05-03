<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => 1,
			'name' => 'Administrators',
			'created' => '2014-05-02 01:28:35',
			'modified' => '2014-05-02 01:28:35'
		),
		array(
			'id' => 2,
			'name' => 'App_Admins',
			'created' => '2014-05-02 01:28:35',
			'modified' => '2014-05-02 01:28:35'
		),
		array(
			'id' => 3,
			'name' => 'App_Users',
			'created' => '2014-05-02 01:28:35',
			'modified' => '2014-05-02 01:28:35'
		),
	);

}
