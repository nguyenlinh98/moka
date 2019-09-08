<?php
App::uses('AppModel', 'Model');

class Post extends AppModel
{
	public $name = 'posts';
	public $validate = array(
		'title' => array(
			'reqiured' => array(
				'rule' => 'notBlack',
				'message' => "Tiêu đề không được để trống"
			),
			'minLength' => array(
				'rule' => array('minLength',4),
				'message' => 'Phải nhập ít nhất 4 kí tự'
			)
		),
	);

	/**
	 *belongto associations
	 *
	 * @var array
	 */
	public $belongsTo =array(
		'User'=>array(
			'className' => 'User',
			'foreignKey' => 'id',
			 'conditions'=> '',
			'fields' => '',
			'order' => '',
		)
	);
	public $hasAndBelongsToMany = array(
		'Tag' => array(
			'classname'=>'Tag',
			'joinTable'=> 'tags',
			'foreignKey' => 'post_id',
//			'associationForeignKey' => '',
			'unique' =>'keepExisting',
			'conditions' =>'',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery'=> '',
			'deleteQuery' =>'',
			'insertQuery' =>'',
		)
	);


}

