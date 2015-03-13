<?php
App::uses('AppController', 'Controller');
/**
 * FamilyIndustries Controller
 *
 * @property FamilyIndustry $FamilyIndustry
 * @property PaginatorComponent $Paginator
 */
class FamilyIndustriesController extends AppController {

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
		$this->FamilyIndustry->recursive = 0;
		$this->set('familyIndustries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FamilyIndustry->exists($id)) {
			throw new NotFoundException(__('Invalid family industry'));
		}
		$options = array('conditions' => array('FamilyIndustry.' . $this->FamilyIndustry->primaryKey => $id));
		$this->set('familyIndustry', $this->FamilyIndustry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FamilyIndustry->create();
			if ($this->FamilyIndustry->save($this->request->data)) {
				$this->Session->setFlash(__('The family industry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family industry could not be saved. Please, try again.'));
			}
		}
		$industries = $this->FamilyIndustry->Industries->find('list');
		$this->set(compact('industries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FamilyIndustry->exists($id)) {
			throw new NotFoundException(__('Invalid family industry'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FamilyIndustry->save($this->request->data)) {
				$this->Session->setFlash(__('The family industry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family industry could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FamilyIndustry.' . $this->FamilyIndustry->primaryKey => $id));
			$this->request->data = $this->FamilyIndustry->find('first', $options);
		}
		$industries = $this->FamilyIndustry->Industry->find('list');
		$this->set(compact('industries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FamilyIndustry->id = $id;
		if (!$this->FamilyIndustry->exists()) {
			throw new NotFoundException(__('Invalid family industry'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FamilyIndustry->delete()) {
			$this->Session->setFlash(__('The family industry has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family industry could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
