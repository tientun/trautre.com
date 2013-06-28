<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'geopoint_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'cost' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'geopoint_id' => 1,
			'date' => '2012-05-26 01:14:42',
			'status' => 1,
			'cost' => 1
		),
	);
}
