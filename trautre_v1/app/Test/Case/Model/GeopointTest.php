<?php
App::uses('Geopoint', 'Model');

/**
 * Geopoint Test Case
 *
 */
class GeopointTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.geopoint', 'app.order');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Geopoint = ClassRegistry::init('Geopoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Geopoint);

		parent::tearDown();
	}

}
