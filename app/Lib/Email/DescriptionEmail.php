<?php
App::uses('CakeEmail', 'Network/Email');

class DescriptionEmail {

	private $emailConfig = 'gmail';
	private $sender = 'hashkitproject@hashkit.com';

	private $from;
	private $to;

	private $email;

	public function __construct($to) {
		$this->from	= array('full_name' => 'Hashkit Hash Result', 'email' => $this->sender);
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

/**
 * This is called in controller to send new password
 * @param String newPassword is expected to be a string 
 * @return boolean true if sending is okay, false if otherwise.
 */
	public function sendHashResult($output) {

		$email = $this->email;
		$email->subject('Your hash result is ready to view');
		//$email->template('email_results');
		//$email->emailFormat('html');
		//$email->viewVars(array('output'=>$output));
		$msg = 'Your hash results is ready to view. PLease log in to http://hashkit.localhost and view your results at result history.';
		$emailOn = Configure::read('EMAIL_ON');
		

		if ($emailOn) {
			$result = $email->send($msg);
		} else {
			$result = false;
		}
		return $result;

		// This is the sample code.
			// public function sendCheckoutEmail($cartData) {
			// 	$email = $this->email;
			// 	$email->subject('Thank you for purchasing from ChildLabel! ' . $cartData['payment_options']);
			// 	$email->template('successful_done');
			// 	$email->emailFormat('html');
			// 	$email->viewVars(array('cartData'=>$cartData,
			// 					'fullName' => $this->to['full_name'],
			// 					'email' => $this->to['email']));
			// 	if (EMAIL_ON) {
			// 		$result = $email->send();
			// 	} else {
			// 		$result = $email;
			// 	}
			// 	return $result;
	// }
	}

}
