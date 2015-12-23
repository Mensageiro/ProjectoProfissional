<?php
App::uses('AppController', 'Controller');
/**
 * Serventes Controller
 *
 * @property Servente $Servente
 * @property PaginatorComponent $Paginator
 */
class ServentesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler', 'Session');
        public $helpers=array('Html','Form','Time','Js');


        public $paginate=array(
           'limit' => 4,
            'order' => array(
                'Servente.id'=> 'asc'
                
            )
            
        );

        /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Servente->recursive = 0;
                
                $this->paginate['Servente']['limit']=4;
                  $this->paginate['Servente']['order']=array('Servente.id'=>'asc');
              //  $this->Paginator->settings=  $this->paginate();
		$this->set('serventes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Servente->exists($id)) {
			throw new NotFoundException(__('Invalid servente'));
		}
		$options = array('conditions' => array('Servente.' . $this->Servente->primaryKey => $id));
		$this->set('servente', $this->Servente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Servente->create();
			if ($this->Servente->save($this->request->data)) {
				$this->Session->setFlash(__('The servente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servente could not be saved. Please, try again.'));
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
		if (!$this->Servente->exists($id)) {
			throw new NotFoundException(__('Invalid servente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Servente->save($this->request->data)) {
				$this->Session->setFlash(__('The servente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Servente.' . $this->Servente->primaryKey => $id));
			$this->request->data = $this->Servente->find('first', $options);
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
		$this->Servente->id = $id;
		if (!$this->Servente->exists()) {
			throw new NotFoundException(__('Invalid servente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Servente->delete()) {
			$this->Session->setFlash(__('The servente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The servente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
