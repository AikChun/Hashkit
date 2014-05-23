<?php
/**
 * HashResultFixture
 *
 */
class HashResultFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'plaintext' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'message_digest' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hash_algorithm_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'hash_test_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'plaintext' => 'hello
asd
bye
hello
hey
asd
',
			'message_digest' => '5d41402abc4b2a76b9719d911017c592
7815696ecbf1c96e6894b779456d330e
bfa99df33b137bc8fb5f5407d7e58da8
5d41402abc4b2a76b9719d911017c592
6057f13c496ecf7fd777ceb9e79ae285
7815696ecbf1c96e6894b779456d330e
',
			'hash_algorithm_id' => '2',
			'hash_test_id' => '1',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '2',
			'plaintext' => 'hello
asd
bye
hello
hey
asd
',
			'message_digest' => '866437cb7a794bce2b727acc0362ee27
61118995d26bef582a59dec9220483e8
739fc397b5948fdc4fdd293fe378e1a2
866437cb7a794bce2b727acc0362ee27
1828111b039cc9cc5a3600061eb0264e
61118995d26bef582a59dec9220483e8
',
			'hash_algorithm_id' => '4',
			'hash_test_id' => '1',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '3',
			'plaintext' => 'hello
bye
hi
what
',
			'message_digest' => '5d41402abc4b2a76b9719d911017c592
bfa99df33b137bc8fb5f5407d7e58da8
49f68a5c8493ec2c0bf489821c21fc3b
4a2028eceac5e1f4d252ea13c71ecec6
',
			'hash_algorithm_id' => '2',
			'hash_test_id' => '2',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '4',
			'plaintext' => 'hello
bye
hi
what
',
			'message_digest' => '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824
b49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8
8f434346648f6b96df89dda901c5176b10a6d83961dd3c1ac88b59b2dc327aa4
749ab2c0d06c42ae3b841b79e79875f02b3a042e43c92378cd28bd444c04d284
',
			'hash_algorithm_id' => '5',
			'hash_test_id' => '2',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '5',
			'plaintext' => 'hvu',
			'message_digest' => '084cff4c4e5f95c47430d564de0dd118',
			'hash_algorithm_id' => '2',
			'hash_test_id' => '3',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '6',
			'plaintext' => 'hvu',
			'message_digest' => '1f975d7b2c6763ba867d120aae4f5d0a2736aea93c09e1ae695da1a6f95e4225',
			'hash_algorithm_id' => '5',
			'hash_test_id' => '3',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '7',
			'plaintext' => 'uyfvuy',
			'message_digest' => '8103683d7815626c758bfc74df40eb59',
			'hash_algorithm_id' => '2',
			'hash_test_id' => '4',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '8',
			'plaintext' => 'uyfvuy',
			'message_digest' => 'a7836a0ad96885ef4b4831e39777bf1f',
			'hash_algorithm_id' => '4',
			'hash_test_id' => '4',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '9',
			'plaintext' => 'hello
asd
bye
hello
hey
asd
',
			'message_digest' => 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d
f10e2821bbbea527ea02200352313bc059445190
78c9a53e2f28b543ea62c8266acfdf36d5c63e61
aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d
7f550a9f4c44173a37664d938f1355f0f92a47a7
f10e2821bbbea527ea02200352313bc059445190
',
			'hash_algorithm_id' => '1',
			'hash_test_id' => '5',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
		array(
			'id' => '10',
			'plaintext' => 'hello
asd
bye
hello
hey
asd
',
			'message_digest' => '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824
688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6
b49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8
2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824
fa690b82061edfd2852629aeba8a8977b57e40fcb77d1a7a28b26cba62591204
688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6
',
			'hash_algorithm_id' => '5',
			'hash_test_id' => '5',
			'created' => '2014-05-09',
			'modified' => '2014-05-09'
		),
	);

}
