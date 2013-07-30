<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property MediaType $MediaType
 * @property User $User
 * @property Stat $Stat
 */
class Media extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'medias';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MediaType' => array(
			'className' => 'MediaType',
			'foreignKey' => 'media_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Stat' => array(
			'className' => 'Stat',
			'foreignKey' => 'media_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
