<?php
App::uses('Place', 'Model');

/**
 * Place Test Case
 *
 */
class PlaceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.place', 'app.region', 'app.user', 'app.comment', 'app.users_place', 'app.rate', 'app.report', 'app.systemresport');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Place = ClassRegistry::init('Place');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Place);

		parent::tearDown();
	}

}
