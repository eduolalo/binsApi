<?php
App::uses('AppController', 'Controller');
/**
 * Bins Controller
 *
 * @property Bin $Bin
 * @property PaginatorComponent $Paginator
 */
class BinsController extends AppController {

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
		$this->Bin->recursive = 0;
		$this->set('bins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bin->exists($id)) {
			throw new NotFoundException(__('Invalid bin'));
		}
		$options = array('conditions' => array('Bin.' . $this->Bin->primaryKey => $id));
		$this->set('bin', $this->Bin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bin->create();
			if ($this->Bin->save($this->request->data)) {
				return $this->flash(__('The bin has been saved.'), array('action' => 'index'));
			}
		}
		$users = $this->Bin->User->find('list');
		$categories = $this->Bin->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bin->exists($id)) {
			throw new NotFoundException(__('Invalid bin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bin->save($this->request->data)) {
				return $this->flash(__('The bin has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Bin.' . $this->Bin->primaryKey => $id));
			$this->request->data = $this->Bin->find('first', $options);
		}
		$users = $this->Bin->User->find('list');
		$categories = $this->Bin->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bin->id = $id;
		if (!$this->Bin->exists()) {
			throw new NotFoundException(__('Invalid bin'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bin->delete()) {
			return $this->flash(__('The bin has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The bin could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Bin->recursive = 0;
		$this->set('bins', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Bin->exists($id)) {
			throw new NotFoundException(__('Invalid bin'));
		}
		$options = array('conditions' => array('Bin.' . $this->Bin->primaryKey => $id));
		$this->set('bin', $this->Bin->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Bin->create();
			if ($this->Bin->save($this->request->data)) {
				return $this->flash(__('The bin has been saved.'), array('action' => 'index'));
			}
		}
		$users = $this->Bin->User->find('list');
		$categories = $this->Bin->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Bin->exists($id)) {
			throw new NotFoundException(__('Invalid bin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bin->save($this->request->data)) {
				return $this->flash(__('The bin has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Bin.' . $this->Bin->primaryKey => $id));
			$this->request->data = $this->Bin->find('first', $options);
		}
		$users = $this->Bin->User->find('list');
		$categories = $this->Bin->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Bin->id = $id;
		if (!$this->Bin->exists()) {
			throw new NotFoundException(__('Invalid bin'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bin->delete()) {
			return $this->flash(__('The bin has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The bin could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
