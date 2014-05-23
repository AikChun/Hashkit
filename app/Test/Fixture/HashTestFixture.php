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
		'recommendation' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'collision_pt' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'collision_md' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'collision_index' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'collision_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
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
			'recommendation' => 'MD5',
			'collision_pt' => 'hello
hello
asd
asd',
			'collision_md' => '5d41402abc4b2a76b9719d911017c592
5d41402abc4b2a76b9719d911017c592
7815696ecbf1c96e6894b779456d330e
7815696ecbf1c96e6894b779456d330e',
			'collision_index' => '0 3 1 5 ',
			'collision_count' => '4',
			'user_id' => '12',
			'created' => '2014-05-09 13:46:29',
			'modified' => '2014-05-09 13:46:29'
		),
		array(
			'id' => '2',
			'analysis' => 'No collision detected',
			'recommendation' => 'SHA256',
			'collision_pt' => '',
			'collision_md' => '',
			'collision_index' => '',
			'collision_count' => '0',
			'user_id' => '12',
			'created' => '2014-05-09 13:46:41',
			'modified' => '2014-05-09 13:46:41'
		),
		array(
			'id' => '3',
			'analysis' => 'No collision detected',
			'recommendation' => 'SHA256',
			'collision_pt' => '',
			'collision_md' => '',
			'collision_index' => '',
			'collision_count' => '0',
			'user_id' => '12',
			'created' => '2014-05-09 13:46:51',
			'modified' => '2014-05-09 13:46:51'
		),
		array(
			'id' => '4',
			'analysis' => 'Basic Hashing',
			'recommendation' => '',
			'collision_pt' => '',
			'collision_md' => '',
			'collision_index' => '',
			'collision_count' => '0',
			'user_id' => '12',
			'created' => '2014-05-09 13:47:11',
			'modified' => '2014-05-09 13:47:11'
		),
		array(
			'id' => '5',
			'analysis' => 'Basic Hashing',
			'recommendation' => '',
			'collision_pt' => '',
			'collision_md' => '',
			'collision_index' => '',
			'collision_count' => '0',
			'user_id' => '12',
			'created' => '2014-05-09 13:47:33',
			'modified' => '2014-05-09 13:47:33'
		),
		array(
			'id' => '6',
			'analysis' => 'Basic Hashing',
			'recommendation' => '',
			'collision_pt' => '',
			'collision_md' => '',
			'collision_index' => '',
			'collision_count' => '0',
			'user_id' => '10',
			'created' => '2014-05-11 23:42:57',
			'modified' => '2014-05-11 23:42:57'
		),
		array(
			'id' => '7',
			'analysis' => 'Basic Hashing',
			'recommendation' => '',
			'collision_pt' => '',
			'collision_md' => '',
			'collision_index' => '',
			'collision_count' => '0',
			'user_id' => '10',
			'created' => '2014-05-18 22:09:49',
			'modified' => '2014-05-18 22:09:49'
		),
	);

}
