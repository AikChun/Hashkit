<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $belongsTo = array('Group');
	public $actsAs = array('Acl' => array('type' => 'requester'));
	public $hashMany = array(
		'HashResult' => array(
			'className' => 'HashResult'
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
}
