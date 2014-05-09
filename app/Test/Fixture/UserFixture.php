<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'profile' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'token' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'email' => array('column' => 'email', 'unique' => 1)
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
			'id' => '5',
			'password' => '96b9369f55be479d63a8ef366966a03a607657e4',
			'name' => 'yong',
			'email' => 'yong24@gmail.com',
			'group_id' => '1',
			'profile' => 'I am yong',
			'status' => '',
			'token' => '',
			'created' => '2014-03-28 01:05:48',
			'modified' => '2014-03-28 01:05:48'
		),
		array(
			'id' => '10',
			'password' => '96b9369f55be479d63a8ef366966a03a607657e4',
			'name' => 'AikChun',
			'email' => 'aikchun616@gmail.com',
			'group_id' => '1',
			'profile' => 'Just changed my profile. ',
			'status' => '',
			'token' => '',
			'created' => '2014-03-28 01:36:02',
			'modified' => '2014-05-05 17:42:04'
		),
		array(
			'id' => '11',
			'password' => '96b9369f55be479d63a8ef366966a03a607657e4',
			'name' => 'dude',
			'email' => 'dude@gmail.com',
			'group_id' => '3',
			'profile' => '',
			'status' => '',
			'token' => '',
			'created' => '2014-04-05 00:20:03',
			'modified' => '2014-04-05 00:20:03'
		),
		array(
			'id' => '12',
			'password' => '1fda6ac901aee9291e9ef40a02e86367bb6da06d',
			'name' => 'ian',
			'email' => 'ian@gmail.com',
			'group_id' => '1',
			'profile' => 'super user',
			'status' => '',
			'token' => '',
			'created' => '2014-04-16 15:29:25',
			'modified' => '2014-04-16 15:29:25'
		),
		array(
			'id' => '13',
			'password' => '96b9369f55be479d63a8ef366966a03a607657e4',
			'name' => 'dudes',
			'email' => 'dudes@gmail.com',
			'group_id' => '3',
			'profile' => 'dues',
			'status' => '',
			'token' => '',
			'created' => '2014-05-04 22:51:33',
			'modified' => '2014-05-04 22:51:33'
		),
	);

}
