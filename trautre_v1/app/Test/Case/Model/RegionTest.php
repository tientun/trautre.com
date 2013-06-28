<?php
App::uses('Region', 'Model');

/**
 * Region Test Case
 *
 */
class RegionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.region', 'app.place', 'app.user', 'app.comment', 'app.users_place', 'app.rate', 'app.report', 'app.systemresport');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Region = ClassRegistry::init('Region');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Region);

		parent::tearDown();
	}

}
