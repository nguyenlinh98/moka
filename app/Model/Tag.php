<?php

App::uses('AppModel','Model');

class Tag extends AppModel
{
	public $name = 'tags';

	public $hasAndBelongsToMany = array(
		'Post' => array(
			'classname'=>'Post',
			'foreignKey' => 'tag_id',
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
