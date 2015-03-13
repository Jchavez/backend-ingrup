<?php
App::uses('AppController', 'Controller');
/**
 * CategoryProducts Controller
 *
 * @property CategoryProduct $CategoryProduct
 * @property PaginatorComponent $Paginator
 */
class CategoryProductsController extends AppController {

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
		$this->CategoryProduct->recursive = 0;
		$this->set('categoryProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoryProduct->exists($id)) {
			throw new NotFoundException(__('Invalid category product'));
		}
		$options = array('conditions' => array('CategoryProduct.' . $this->CategoryProduct->primaryKey => $id));
		$this->set('categoryProduct', $this->CategoryProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoryProduct->create();
			if ($this->CategoryProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The category product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category product could not be saved. Please, try again.'));
			}
		}
		$familyProducts = $this->CategoryProduct->FamilyProducts->find('list');
		$this->set(compact('familyProducts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoryProduct->exists($id)) {
			throw new NotFoundException(__('Invalid category product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoryProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The category product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoryProduct.' . $this->CategoryProduct->primaryKey => $id));
			$this->request->data = $this->CategoryProduct->find('first', $options);
		}
		$familyProducts = $this->CategoryProduct->FamilyProducts->find('list');
		$this->set(compact('familyProducts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoryProduct->id = $id;
		if (!$this->CategoryProduct->exists()) {
			throw new NotFoundException(__('Invalid category product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoryProduct->delete()) {
			$this->Session->setFlash(__('The category product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
