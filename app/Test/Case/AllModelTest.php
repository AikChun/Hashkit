<?php
class AllModel extends CakeTestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('All Model tests');
		$path = dirname(__FILE__);
		$suite->addTestDirectory($path . DS . 'Model');
		return $suite;
	}

}
