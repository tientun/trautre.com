<?php
App::uses('UsersPlace', 'Model');

/**
 * UsersPlace Test Case
 *
 */
class UsersPlaceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.users_place', 'app.user', 'app.comment', 'app.place', 'app.region', 'app.rate', 'app.report', 'app.systemresport');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersPlace = ClassRegistry::init('UsersPlace');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersPlace);

		parent::tearDown();
	}

}
