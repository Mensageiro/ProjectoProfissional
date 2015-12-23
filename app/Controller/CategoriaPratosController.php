<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaPratos Controller
 *
 * @property CategoriaPrato $CategoriaPrato
 * @property PaginatorComponent $Paginator
 */
class CategoriaPratosController extends AppController {

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
		$this->CategoriaPrato->recursive = 0;
		$this->set('categoriaPratos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaPrato->exists($id)) {
			throw new NotFoundException(__('Invalid categoria prato'));
		}
		$options = array('conditions' => array('CategoriaPrato.' . $this->CategoriaPrato->primaryKey => $id));
		$this->set('categoriaPrato', $this->CategoriaPrato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaPrato->create();
			if ($this->CategoriaPrato->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria prato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria prato could not be saved. Please, try again.'));
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
		if (!$this->CategoriaPrato->exists($id)) {
			throw new NotFoundException(__('Invalid categoria prato'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaPrato->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria prato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria prato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaPrato.' . $this->CategoriaPrato->primaryKey => $id));
			$this->request->data = $this->CategoriaPrato->find('first', $options);
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
		$this->CategoriaPrato->id = $id;
		if (!$this->CategoriaPrato->exists()) {
			throw new NotFoundException(__('Invalid categoria prato'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaPrato->delete()) {
			$this->Session->setFlash(__('The categoria prato has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categoria prato could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
