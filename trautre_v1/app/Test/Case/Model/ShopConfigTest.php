<?php
App::uses('ShopConfig', 'Model');

/**
 * ShopConfig Test Case
 *
 */
class ShopConfigTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.shop_config', 'app.curency');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShopConfig = ClassRegistry::init('ShopConfig');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShopConfig);

		parent::tearDown();
	}

}
