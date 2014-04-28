<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Email'); 
	public $helpers=array('Html','Form','Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->_configureAllowedActions();
	}

/**
 * determine which actions require authentication or allow anonymous access
 *
 * @return void
 **/
 protected function _configureAllowedActions() {
 	$allowedActions = array(
 	 'login',
 	 'logout',
 	 'admin_login',
 	 'admin_logout',
 	 'forget_password',
 	 'reset_password',
	 'register',
 	);
 	$this->Auth->allow($allowedActions);
 }

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
		$options = array(
			'conditions' => array(
				'User.' . $this->User->primaryKey => $id)
			);
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				$this->redirect($this->Auth->redirect('/'));
			} else {
				$this->Session->setFlash(__('Your username or password was incorrect.'));
			}
		}
	}

	public function logout() {
		$this->Session->setFlash("Goodbye.");
		$this->redirect($this->Auth->logout());

	}

	public function register() {
		if($this->request->is('post')) {
			$data = $this->request->data;
			$data['User']['group_id'] = 3;
			try{
				if(!($data['User']['password'] == $data['User']['confirm_password'])) {
					throw new Exception ('Please the password\'s does not match!');
				}
				$conditions = array(
					'conditions' => array('User.email' => $data['User']['email']),
					'fields' => array('User.email')
				);
				$searchResult = $this->User->find('first', $conditions );
				if(!empty($searchResult)) {
					throw new Exception ('This email is not available. This email address has already been used.');
				}
				$this->User->create();
				if ($this->User->save($data)) {
					$this->Session->setFlash(__('You have registered successfully!'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}

			} catch(Exception $e) {
				$this->Session->setFlash($e->getMessage());
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function forget_password() {
		if ($this->request->is('post')) {
			$email = $this->request->data['User']['email'];
			$emailExist = $this->User->checkEmailExists($email);

			if ($emailExist === true) {
				//concat datetime and email, and hash them to create token
				$userData = $this->User->findXORCreateToken($email);

				//send email with token
				$this->User->sendToken($userData);
				$this->Session->setFlash('The reset link has been sent to your email. Please check your email and click the link.');
				$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash('Did you enter a valid email address?');
			}
		}
	}

/**
 * reset_password method
 *
 * @return void
 */
	public function reset_password() {
		if(isset($_GET['token'])){
			$userData = $this->User->findByToken($_GET['token']);
			$validToken = $userData;
			$this->set('token', $_GET['token']);
		} else {
			$validToken = false;
		}

		if (!$validToken) {
			$this->Session->setFlash('Invalid link. Please Login.');
			$this->redirect(array('action' => 'login'));
		}

		if ($this->request->is('get')) {
			if ($validToken) {
				$this->request->data = $userData;
			}
		} else if ($this->request->is('post') || $this->request->is('put')) {
			try {
				$result = $this->User->resetPassword($this->request->data);
				$errorMessage = "Not successful";
			} catch(CakeException $error) {
				$result = false;
				$errorMessage = $error->getMessage();
			}

			if ($result) {
				$this->Session->setFlash('Password successfully changed');
				$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash($errorMessage);
			}
		}
	}

/**
 * View for users profile
 */
	public function view_my_own_profile() {
		$conditions = array(
			'conditions' => array(
				'User.id' => $this->Auth->user('id')
			)
		);

		$data = $this->User->find('first', $conditions);
		$this->log($data);
		$this->set('data', $data);
	}
}
