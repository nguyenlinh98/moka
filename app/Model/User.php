<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel
{
	public $name = 'users';
	public $validate = array(
		'username'=> array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => "username chỉ có nhập bằng chữ hoặc số",
			),
			'required'=> array(
				'rule'=>'notBlank',
				'message'=>'username không được để trống'
			),
			'minLength'=>array(
				'rule'=>array('minLength',4),
				'message'=> 'nhập trên 4 kí tự'
			)
		),
		'password'=> array(
			'required' => array(
				'rule'=> 'notBlank',
				'message'=> 'Mật khẩu không được để trống'
			),
			'alphanumeric' => array(
				'rule' =>array('alphanumeric'),
				'message'=>'password chỉ có nhập bằng chữ hoặc số không bao gồm kí tự đặc biệt'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'reader','writer')),
				'message' => 'Vui lòng chọn quyền cho user',
				'allowEmpty' => false
			)
		)

	);
	/**
	 * hasMany association
	 * @var array
	 */
	public $hasMany = array(
		'Post' =>array(
			'classname' => 'Post',
			'foreignKey' =>'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' =>'',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive'=> '',
			'finderQuery' => '',
			'counterQuery' =>'',
		)
	);
}
