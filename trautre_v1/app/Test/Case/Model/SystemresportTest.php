<?php
App::uses('Systemresport', 'Model');

/**
 * Systemresport Test Case
 *
 */
class SystemresportTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.systemresport', 'app.user', 'app.comment', 'app.place', 'app.region', 'app.users_place', 'app.rate', 'app.report');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Systemresport = ClassRegistry::init('Systemresport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Systemresport);

		parent::tearDown();
	}

}
