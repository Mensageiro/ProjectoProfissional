<?php
App::uses('AppController', 'Controller');
/**
 * Pratos Controller
 *
 * @property Prato $Prato
 * @property PaginatorComponent $Paginator
 */
class PratosController extends AppController {

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
		$this->Prato->recursive = 0;
		$this->set('pratos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prato->exists($id)) {
			throw new NotFoundException(__('Invalid prato'));
		}
		$options = array('conditions' => array('Prato.' . $this->Prato->primaryKey => $id));
		$this->set('prato', $this->Prato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prato->create();
			if ($this->Prato->save($this->request->data)) {
				$this->Session->setFlash(__('The prato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prato could not be saved. Please, try again.'));
			}
		}
		$categoriaPratos = $this->Prato->CategoriaPrato->find('list');
		$cozinheiros = $this->Prato->Cozinheiro->find('list');
		$this->set(compact('categoriaPratos', 'cozinheiros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Prato->exists($id)) {
			throw new NotFoundException(__('Invalid prato'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Prato->save($this->request->data)) {
				$this->Session->setFlash(__('The prato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prato.' . $this->Prato->primaryKey => $id));
			$this->request->data = $this->Prato->find('first', $options);
		}
		$categoriaPratos = $this->Prato->CategoriaPrato->find('list');
		$cozinheiros = $this->Prato->Cozinheiro->find('list');
		$this->set(compact('categoriaPratos', 'cozinheiros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Prato->id = $id;
		if (!$this->Prato->exists()) {
			throw new NotFoundException(__('Invalid prato'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Prato->delete()) {
			$this->Session->setFlash(__('The prato has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prato could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
