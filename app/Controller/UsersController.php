<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	/*
    public function beforeFilter() {
	    parent::beforeFilter();

	    // For CakePHP 2.0
	    $this->Auth->allow('*');

	    // For CakePHP 2.1 and up
	    $this->Auth->allow();
	}
	*/
	public function beforeFilter() {
    	parent::beforeFilter();
    	//$this->Auth->allow('index','edit','add','view');
    	//$this->Auth->allow('initdb');
	}
	
	
	function login() {
		if ($this->request->is('post')) {
		if ($this->Auth->login()) {
			return $this->redirect($this->Auth->redirectUrl());
		}
		$this->Session->setFlash(__('Invalid username or password, try again'));
		}
        /*if ($this->Session->read('Auth.User')) {
                $this->Session->setFlash('You are logged in!');
                $this->redirect('/', null, false);
        }*/
    }
	function logout() {
            $this->Session->setFlash('Good-Bye');
            $this->redirect($this->Auth->logout());
    }
 
   public function initdb() {
	    $group = $this->User->Role; 

	    // Allow admins to everything
	    $group->id = 10;
	    $this->Acl->allow($group, 'controllers');
	    $this->Acl->allow($group, 'controllers/Pages');
	    $this->Acl->allow($group, 'controllers/Pages/display');

	    $this->Acl->allow($group, 'controllers/Posts');
	    $this->Acl->allow($group, 'controllers/Posts/index');
	    $this->Acl->allow($group, 'controllers/Posts/view');
	    $this->Acl->allow($group, 'controllers/Posts/add');
	    $this->Acl->allow($group, 'controllers/Posts/edit');
	    $this->Acl->allow($group, 'controllers/Posts/delete');

	    $this->Acl->allow($group, 'controllers/Roles');
	    $this->Acl->allow($group, 'controllers/Roles/index');
	    $this->Acl->allow($group, 'controllers/Roles/view');
		$this->Acl->allow($group, 'controllers/Roles/add');
	    $this->Acl->allow($group, 'controllers/Roles/edit');
	    $this->Acl->allow($group, 'controllers/Roles/delete');

	    $this->Acl->allow($group, 'controllers/Users');
	    $this->Acl->allow($group, 'controllers/Users/index');
	    $this->Acl->allow($group, 'controllers/Users/view');
		$this->Acl->allow($group, 'controllers/Users/add');
	    $this->Acl->allow($group, 'controllers/Users/edit');
	    $this->Acl->allow($group, 'controllers/Users/delete');

	    $this->Acl->allow($group, 'controllers/Markets');
	    $this->Acl->allow($group, 'controllers/Markets/index');
	    $this->Acl->allow($group, 'controllers/Markets/view');
		$this->Acl->allow($group, 'controllers/Markets/add');
	    $this->Acl->allow($group, 'controllers/Markets/edit');
	    $this->Acl->allow($group, 'controllers/Markets/delete');

	    $this->Acl->allow($group, 'controllers/FamilyProducts');
	    $this->Acl->allow($group, 'controllers/FamilyProducts/index');
	    $this->Acl->allow($group, 'controllers/FamilyProducts/view');
		$this->Acl->allow($group, 'controllers/FamilyProducts/add');
	    $this->Acl->allow($group, 'controllers/FamilyProducts/edit');
	    $this->Acl->allow($group, 'controllers/FamilyProducts/delete');

	    $this->Acl->allow($group, 'controllers/CategoryProducts');
	    $this->Acl->allow($group, 'controllers/CategoryProducts/index');
	    $this->Acl->allow($group, 'controllers/CategoryProducts/view');
		$this->Acl->allow($group, 'controllers/CategoryProducts/add');
	    $this->Acl->allow($group, 'controllers/CategoryProducts/edit');
	    $this->Acl->allow($group, 'controllers/CategoryProducts/delete');

	    $this->Acl->allow($group, 'controllers/Products');
	    $this->Acl->allow($group, 'controllers/Products/index');
	    $this->Acl->allow($group, 'controllers/Products/view');
		$this->Acl->allow($group, 'controllers/Products/add');
	    $this->Acl->allow($group, 'controllers/Products/edit');
	    $this->Acl->allow($group, 'controllers/Products/delete');

	    $this->Acl->allow($group, 'controllers/Industries');
	    $this->Acl->allow($group, 'controllers/Industries/index');
	    $this->Acl->allow($group, 'controllers/Industries/view');
		$this->Acl->allow($group, 'controllers/Industries/add');
	    $this->Acl->allow($group, 'controllers/Industries/edit');
	    $this->Acl->allow($group, 'controllers/Industries/delete');

	    $this->Acl->allow($group, 'controllers/FamilyIndustries');
	    $this->Acl->allow($group, 'controllers/FamilyIndustries/index');
	    $this->Acl->allow($group, 'controllers/FamilyIndustries/view');
		$this->Acl->allow($group, 'controllers/FamilyIndustries/add');
	    $this->Acl->allow($group, 'controllers/FamilyIndustries/edit');
	    $this->Acl->allow($group, 'controllers/FamilyIndustries/delete'); 
	    
	    $this->Acl->allow($group, 'controllers/CategoryIndustries');
	    $this->Acl->allow($group, 'controllers/CategoryIndustries/index');
	    $this->Acl->allow($group, 'controllers/CategoryIndustries/view');
		$this->Acl->allow($group, 'controllers/CategoryIndustries/add');
	    $this->Acl->allow($group, 'controllers/CategoryIndustries/edit');
	    $this->Acl->allow($group, 'controllers/CategoryIndustries/delete'); 

	    $this->Acl->allow($group, 'controllers/News');
	    $this->Acl->allow($group, 'controllers/News/index');
	    $this->Acl->allow($group, 'controllers/News/view');
		$this->Acl->allow($group, 'controllers/News/add');
	    $this->Acl->allow($group, 'controllers/News/edit');
	    $this->Acl->allow($group, 'controllers/News/delete'); 


	    // Allow admins to everything
	    $group->id = 11;
	    $this->Acl->deny($group, 'controllers');

	    $this->Acl->allow($group, 'controllers/Posts');
	    $this->Acl->allow($group, 'controllers/Posts/index');
	    $this->Acl->allow($group, 'controllers/Posts/view');
	    $this->Acl->allow($group, 'controllers/Posts/add');
	    $this->Acl->allow($group, 'controllers/Posts/edit');
	    $this->Acl->allow($group, 'controllers/Posts/delete');

	    $this->Acl->allow($group, 'controllers/News');
	    $this->Acl->allow($group, 'controllers/News/index');
	    $this->Acl->allow($group, 'controllers/News/view');
		$this->Acl->allow($group, 'controllers/News/add');
	    $this->Acl->allow($group, 'controllers/News/edit');
	    $this->Acl->allow($group, 'controllers/News/delete'); 

	    // allow basic users to log out 
	    $this->Acl->allow($group, 'controllers/users/logout');

	    // we add an exit to avoid an ugly "missing views" error message
	    echo "all done";
	    exit;
	}


} 
