<?php
App::uses('AppModel', 'Model');
App::uses('PasswordEmail', 'Lib/Email');

/**
 * User Model
 *
 */
class User extends AppModel {


/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $belongsTo = array('Group');
	public $actsAs = array('Acl' => array('type' => 'requester'));
	public $hasMany = array(
		'HashTest' => array(
			'className' => 'HashTest',
			'foreignKey' => 'user_id',
			'dependent' => true
		)
	);

	public function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}

	public function beforeSave($options = array()) {
		if(isset($this->data['User']['password'])) {
			$this->data['User']['password'] = AuthComponent::password(
				$this->data['User']['password']
			);
		}
		if(isset($this->data['User']['new_password'])) {
		}
		$this->Behaviors->disable('Acl');
		return true;
	}

	public function afterSave($created, $options = array()) {
		$user_id = AuthComponent::user('id');
		if($user_id > 0) {
			$user = $this->safeRead($user_id);
			CakeSession::write('Auth.User', $user);
		}
		$this->Behaviors->enable('Acl');
		return true;
	}

	public function beforeDelete($cascade = true) {
		$conditions = array('HashTest.user_id' => $this->id);
		$this->log('Logging id');
		$this->log($this->id);
		$this->HashTest->deleteAll($conditions);
		return true;
	}

	public function safeRead($id) {
		$this->recursive = 0;
		$result = $this->find('first', array(
			'conditions' => array('User.id' => $id),
			'contain' => null
		));
		$user = $result['User'];

		unset($user['password']);
		unset($result['User']);

		return array_merge($user, $result);
	}

	public function bindNode($user) {
		return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}

/**
 *
 * Checks the database to see if the email provided exists. If there is, return true.
 *
 * @param String $email Email Provided
 * @return Boolean True if email exists, else return false
 */
	public function checkEmailExists($email) {
		$emailExists = $this->find('count', array(
			'conditions' => array(
				'email' => $email)
			)
		);

		return ($emailExists === 1);
	}

/**
 *
 * Checks the database to see if the email provided exists. If there is, return true.
 *
 * @param String $email Email Provided
 * @return Boolean True if email exists, else return false
 */
	public function checkEmailPasswordWorks($data) {
		$passwordHash = AuthComponent::password($data['User']['password']);
		$email = $data['User']['email'];
		$emailPasswordWorks = $this->find('count', array(
			'conditions' => array(
				'email' => $email,
				'password' => $passwordHash
			)
		));

		return ($emailPasswordWorks === 1);
	}

/**
 *
 * Makes a token using the email given and the current dateTime
 *
 * @param String $email Email Provided
 * @return String $token The token
 */
	public function createToken($email) {
		$dateTime = date('Y-m-d H:i:s');

		$plaintext = $email . $dateTime;

		$token = Security::hash($plaintext, 'sha1', true);

		return $token;
	}
/**
 *
 * searches the users table for a token, given the email. If token is empty, create a new one and return it.
 *
 * @param String $email Email Provided
 * @return Array $userData containing name, email and token
 */
	public function findXORCreateToken($email){
		$userData = $this->find('first', array(
			'conditions' => array('User.email' => $email),
			'fields' => array('User.id', 'User.name', 'User.token', 'User.email')
		));

		if ($userData['User']['token'] === null || empty($userData['User']['token'])) {
			$token = $this->createToken($email);
			$this->id = $userData['User']['id'];
			$this->saveField('token', $token, array(
				'callbacks' => false,
				'validate' => false
			));
			$userData['User']['token'] = $token;
		}
		$userData = Hash::extract($userData, 'User');
		return $userData;
	}


/**
 *
 * Sends the user a token to reset password
 *
 * @param Array $userData Array containing full_name, email and token
 * @return void
 */
	public function sendToken($userData){
		$recipient = array(
			'full_name' => $userData['name'],
			'email' => $userData['email'],
		);
		$email = new PasswordEmail($recipient);
		$email->sendToken($userData['token']);
	}

/**
 *
 * Resets the password
 *
 * @param Array $data Array containing id, new_password, confirm_new_password
 * @return mixed return user data array or true if successful. false otherwise
 * @throws CakeException when passwords don't match
 */
	public function resetPassword($data){
		//check if new pwd matches confirm pwd
		if ($data['User']['new_password'] == $data['User']['confirm_new_password']) {
			//save the pwd if successful
			$data['User']['password'] = $data['User']['new_password'];
			$data['User']['token'] = null;
			$result = $this->save($data);
			return $result;
		} else {
			throw new CakeException ('Your new passwords do not match.');
		}
	}
// end of password related function


}
