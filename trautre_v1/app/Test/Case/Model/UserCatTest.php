<?php
App::uses('UserCat', 'Model');

/**
 * UserCat Test Case
 *
 */
class UserCatTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_cat', 'app.category', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserCat = ClassRegistry::init('UserCat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCat);

		parent::tearDown();
	}

}
