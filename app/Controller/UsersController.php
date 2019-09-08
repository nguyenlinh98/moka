<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController
{
	public $name = "Users";
	public $helpers = array('Form','Paginator','Html');
	public $paginate = array();
	public function beforeFilter()
	{
		parent::beforeFilter();
//		$this->Auth->allow('add');
	}

	public function index()
	{
		$search_input = $this->request->query;
		 if($search_input == null){
			 $this->paginate = array(
				 'limit' => '4',
				 'order' => array('id' => 'ASC')
			 );
			 $users = $this->paginate("User");
		 }
		 else {
			 $condition = array();
			 $search = trim($search_input['username']);
			 $condition = array(
				 'User.username LIKE' => '%' . str_replace('%', '\%', $search) . '%'
			 );
			 $this->paginate = array(
				 'order' => array('id' => 'ASC'),
				 'limit' => 5,
				 'conditions' => $condition
			 );
			 $users =$this->paginate("User");

		 } return $this->set('users',$users);
	}

	public function add()
	{
		if ($this->request->is('post')) {
			if ($this->User->save($this->request->data)) {
//				$this->Flash->success(__('User được thêm thành công'));
				return $this->redirect('/user');
			}
			$this->Flash->error(
				__(' Chưa thêm được bản ghi')
			);
		}
	}

	public function delete($id, $user_id = null )
	{
		if(!$this->request->is('get')){
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if($this->User->delete()){
			$this->Flash->success(__('Bản ghi được xóa thành công!'));
			return $this->redirect('/user');
		}
		$this->Flash->error(__('chưa có bản ghi nào được xóa!'));
		return $this->redirect('/user');

	}

	public function update($id = null)
	{

	}
}
