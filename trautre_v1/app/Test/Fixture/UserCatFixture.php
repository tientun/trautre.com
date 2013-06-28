<?php
/**
 * UserCatFixture
 *
 */
class UserCatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'unit' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_user_cat_user' => array('column' => 'user_id', 'unique' => 0), 'fk_user_cat_cat' => array('column' => 'category_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'user_id' => 1,
			'type' => 1,
			'unit' => 'Lorem ipsum do',
			'created' => '2012-05-12 03:42:13',
			'modified' => '2012-05-12 03:42:13'
		),
	);
}
