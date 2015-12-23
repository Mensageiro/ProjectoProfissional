<?php
App::uses('AppController', 'Controller');
/**
 * Cozinheiros Controller
 *
 * @property Cozinheiro $Cozinheiro
 * @property PaginatorComponent $Paginator
 */
class CozinheirosController extends AppController {

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
		$this->Cozinheiro->recursive = 0;
		$this->set('cozinheiros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cozinheiro->exists($id)) {
			throw new NotFoundException(__('Invalid cozinheiro'));
		}
		$options = array('conditions' => array('Cozinheiro.' . $this->Cozinheiro->primaryKey => $id));
		$this->set('cozinheiro', $this->Cozinheiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cozinheiro->create();
			if ($this->Cozinheiro->save($this->request->data)) {
				$this->Session->setFlash('The cozinheiro has been saved.','default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The cozinheiro could not be saved. Please, try again.', 'default', array('class'=>'alert alert-danger'));
			}
		}
		$pratos = $this->Cozinheiro->Prato->find('list');
		$this->set(compact('pratos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cozinheiro->exists($id)) {
			throw new NotFoundException(__('Invalid cozinheiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cozinheiro->save($this->request->data)) {
				$this->Session->setFlash('The cozinheiro has been saved.','default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The cozinheiro could not be saved. Please, try again.','default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Cozinheiro.' . $this->Cozinheiro->primaryKey => $id));
			$this->request->data = $this->Cozinheiro->find('first', $options);
		}
		$pratos = $this->Cozinheiro->Prato->find('list');
		$this->set(compact('pratos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cozinheiro->id = $id;
		if (!$this->Cozinheiro->exists()) {
			throw new NotFoundException(__('Invalid cozinheiro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cozinheiro->delete()) {
			$this->Session->setFlash(__('The cozinheiro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cozinheiro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
