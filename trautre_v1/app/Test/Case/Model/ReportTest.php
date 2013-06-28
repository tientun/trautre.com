<?php
App::uses('Report', 'Model');

/**
 * Report Test Case
 *
 */
class ReportTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.report', 'app.place', 'app.region', 'app.user', 'app.comment', 'app.users_place', 'app.rate', 'app.systemresport');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Report = ClassRegistry::init('Report');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Report);

		parent::tearDown();
	}

}
