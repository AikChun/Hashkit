<?php
App::uses('CakeEmail', 'Network/Email');

class PasswordEmail {

	private $emailConfig = 'gmail';
	private $sender = 'hashkitproject@hashkit.com';

	private $from;
	private $to;

	private $email;

	public function __construct($to) {
		$this->from	= array('full_name' => 'Hashkit Password Support System', 'email' => $this->sender);
		$this->to	= $to;

		$this->_prepareAddressFields();
	}

	protected function _prepareAddressFields() {
		$this->emailConfig = Configure::read('EMAIL_CONFIG');
		$this->sender = Configure::read('EMAIL_SENDER');
		$fromEmail	= $this->from['email'];
		$fromFullName	= $this->from['full_name'];

		$toEmail	= $this->to['email'];
		$toFullName	= $this->to['full_name'];

		$email = new CakeEmail($this->emailConfig);

		$email->from(array($fromEmail => $fromFullName));
		$email->to(array($toEmail => $toFullName));
		$email->sender($this->sender);
		$email->replyTo($fromEmail, $fromFullName);
		$this->email = $email;
		return $email;
	}

	public function sendNewPassword($newPassword) {
		$email = $this->email;
		$email->subject('[Password Reset] Do NOT reply to this email');
		$emailOn = Configure::read('EMAIL_ON');
		if ($emailOn) {
			$result = $email->send("This is your new password $newPassword.");
		} else {
			$result = $email;
		}
		return $result;
	}

	public function sendToken($token) {
		$email = $this->email;
		$email->subject('[Password Reset] Do NOT reply to this email');
		$baseURL = Router::url('/users/reset_password?token=' . $token, true);
		$emailOn = Configure::read('EMAIL_ON');
		if ($emailOn) {
			$result = $email->send("Please click this link to reset your password. $baseURL");
		} else {
			$result = $email;
		}
		return $result;
	}
}
