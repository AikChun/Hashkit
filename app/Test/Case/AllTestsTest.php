<?php
class AllTest extends CakeTestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('All tests');
		$path = dirname(__FILE__);
		$suite->addTestFile($path . DS . 'AllModelTest.php');
		return $suite;
	}

}
