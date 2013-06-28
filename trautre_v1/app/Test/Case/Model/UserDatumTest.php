<?php
App::uses('UserDatum', 'Model');

/**
 * UserDatum Test Case
 *
 */
class UserDatumTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_datum', 'app.category', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserDatum = ClassRegistry::init('UserDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserDatum);

		parent::tearDown();
	}

}
