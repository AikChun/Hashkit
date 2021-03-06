<?php
App::uses('AppController', 'Controller');
App::uses('ContactUsEmail', 'Lib/Email');
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
		'forget_password',
		'reset_password',
		'register',
		'view_my_own_profile',
		'edit_my_own_profile',
		'contact_us'
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
		$this->Paginator->settings = array(
			'limit' => 10);
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
				$this->Session->setFlash('The user has been added.', 'alert-box', array('class'=>'alert-danger'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
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
			$this->User->id = $id;
				$this->User->set(array(
					'name' => $this->request->data['User']['name'],
					'email' => $this->request->data['User']['email'],
					'group_id' => $this->request->data['User']['group_id'],
					'profile' => $this->request->data['User']['profile'],
					'status' => $this->request->data['User']['status']
					));
			if ($this->User->save()) {
				$this->Session->setFlash('The user has been saved.', 'alert-box', array('class'=>'alert-danger'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			$this->set('groupId', $this->request->data['User']['group_id']);

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
			$this->Session->setFlash('The user has been deleted.', 'alert-box', array('class'=>'alert-danger'));
		} else {
			$this->Session->setFlash('The user could not be deleted. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				$this->redirect($this->Auth->redirect('/'));
			} else {
				$this->Session->setFlash('Your username or password was incorrect.', 'alert-box', array('class'=>'alert-danger'));
			}
		}
	}

	public function logout() {
		$this->Session->setFlash('You have successfully logout.', 'alert-box', array('class'=>'alert-danger'));
		$this->redirect($this->Auth->logout());

	}

	public function register() {
		if($this->request->is('post')) {
			$data = $this->request->data;
			$data['User']['group_id'] = 3;
			try{
				if(!($data['User']['password'] == $data['User']['confirm_password'])) {
					throw new Exception ('Password\'s does not match!');
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
					$this->Session->setFlash('You have registered successfully!', 'alert-box', array('class'=>'alert-danger'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('The user could not be saved. Please, try again.', 'alert-box', array('class'=>'alert-danger'));
				}

			} catch(Exception $e) {
				$this->Session->setFlash($e->getMessage(), 'alert-box', array('class'=>'alert-danger'));
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
				$this->Session->setFlash('The reset link has been sent to your email. Please check your email and click the link.', 'alert-box', array('class'=>'alert-danger'));
				$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash('Did you enter a valid email address?', 'alert-box', array('class'=>'alert-danger'));
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
			$this->Session->setFlash('Invalid link. Please Login.', 'alert-box', array('class'=>'alert-danger'));
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
				$this->Session->setFlash('Password successfully changed', 'alert-box', array('class'=>'alert-danger'));
				$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash($errorMessage, 'alert-box', array('class'=>'alert-danger'));
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
		$this->set('data', $data);
	}

/**
 * users edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit_my_own_profile() {
		if (!$this->User->exists($this->Auth->user('id'))) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->User->id = $this->Auth->user('id');
			$this->User->set(array(
				'name' => $this->request->data['User']['name'],
				'profile' => $this->request->data['User']['profile']
			));
			if ($this->User->save()) {
				$this->Session->setFlash('The user has been saved', 'alert-box', array('class'=>'alert-danger'));
				return $this->redirect(array('action' => 'view_my_own_profile'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please try again.', 'alert-box', array('class'=>'alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $this->Auth->user('id')));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * Function to send enquiry email to the project
 */
	public function contact_us() {
		if ($this->request->is('post')) {
			$user = $this->User->findXORCreate($this->data['User'], array('email'));
			App::uses('EnquiryEmail', 'Lib/Email');

			$from = array('email' => $user['User']['email'], 'full_name' => $user['User']['name']);
			$email = new EnquiryEmail($from);

			$success = $email->send($this->data['User']['message']);

			if ($success) {
				$this->Session->setFlash('An email has been sent to Us and we will get back to you shortly. Thank you!', 'alert-box',
					array('class'=>'alert-danger'));
				$this->redirect('/contact_us');
			} else {
				$this->Session->setFlash('Sorry an error has occurred. Please try again!', 'alert-box',
					array('class'=>'alert-danger'));
				$this->redirect('/contact_us');
			}
		}
		
		// if($this->request->is('post')) {
		//	$data = $this->request->data;
		//	$this->log($data);

		// $email = new ContactUsEmail($data);
		// $sendEmailSuccess = $email->sendContactUs($data);
		//}
		
	}
}
