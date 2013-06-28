<?php
/**
 * PlaceFixture
 *
 */
class PlaceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'sub_region' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'region_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'content' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 500, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'longitude' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'latitude' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'photo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'is_system' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'is_del' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'sub_region' => 'Lorem ipsum dolor sit amet',
			'region_id' => 1,
			'user_id' => 1,
			'content' => 'Lorem ipsum dolor sit amet',
			'longitude' => 1,
			'latitude' => 1,
			'photo' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-05-20 03:01:39',
			'is_system' => 1,
			'is_del' => 1
		),
	);
}
