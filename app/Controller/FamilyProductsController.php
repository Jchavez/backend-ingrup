<?php
App::uses('AppController', 'Controller');
/**
 * FamilyProducts Controller
 *
 * @property FamilyProduct $FamilyProduct
 * @property PaginatorComponent $Paginator
 */
class FamilyProductsController extends AppController {

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
		$this->FamilyProduct->recursive = 0;
		$this->set('familyProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyProduct->exists($id)) {
			throw new NotFoundException(__('Invalid family product'));
		}
		$options = array('conditions' => array('FamilyProduct.' . $this->FamilyProduct->primaryKey => $id));
		$this->set('familyProduct', $this->FamilyProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyProduct->create();
			if ($this->FamilyProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The family product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family product could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyProduct->exists($id)) {
			throw new NotFoundException(__('Invalid family product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The family product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyProduct.' . $this->FamilyProduct->primaryKey => $id));
			$this->request->data = $this->FamilyProduct->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyProduct->id = $id;
		if (!$this->FamilyProduct->exists()) {
			throw new NotFoundException(__('Invalid family product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FamilyProduct->delete()) {
			$this->Session->setFlash(__('The family product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
