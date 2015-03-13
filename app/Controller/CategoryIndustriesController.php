<?php
App::uses('AppController', 'Controller');
/**
 * CategoryIndustries Controller
 *
 * @property CategoryIndustry $CategoryIndustry
 * @property PaginatorComponent $Paginator
 */
class CategoryIndustriesController extends AppController {

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
		$this->CategoryIndustry->recursive = 0;
		$this->set('categoryIndustries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoryIndustry->exists($id)) {
			throw new NotFoundException(__('Invalid category industry'));
		}
		$options = array('conditions' => array('CategoryIndustry.' . $this->CategoryIndustry->primaryKey => $id));
		$this->set('categoryIndustry', $this->CategoryIndustry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoryIndustry->create();
			if ($this->CategoryIndustry->save($this->request->data)) {
				$this->Session->setFlash(__('The category industry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category industry could not be saved. Please, try again.'));
			}
		}
		$familyIndustries = $this->CategoryIndustry->FamilyIndustries->find('list');
		$this->set(compact('familyIndustries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoryIndustry->exists($id)) {
			throw new NotFoundException(__('Invalid category industry'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoryIndustry->save($this->request->data)) {
				$this->Session->setFlash(__('The category industry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category industry could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoryIndustry.' . $this->CategoryIndustry->primaryKey => $id));
			$this->request->data = $this->CategoryIndustry->find('first', $options);
		}
		$familyIndustries = $this->CategoryIndustry->FamilyIndustries->find('list');
		$this->set(compact('familyIndustries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoryIndustry->id = $id;
		if (!$this->CategoryIndustry->exists()) {
			throw new NotFoundException(__('Invalid category industry'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoryIndustry->delete()) {
			$this->Session->setFlash(__('The category industry has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category industry could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
