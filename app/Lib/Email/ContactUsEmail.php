
<?php
App::uses('CakeEmail', 'Network/Email');

class ContactUsEmail {

	private $emailConfig = 'gmail';
	private $recipient = 'hashkitproject@gmail.com';
	private $sender = 'hashkitproject@hashkit.com';

	private $from;
	private $to;

	private $email;

	public function __construct($data) {

		$this->from	= array('full_name' => $data['Users']['name'], 'email' => $this->sender);
		$this->to	= array('full_name' => 'Hashkit Support System', 'email' => $this->recipient);

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

	/* @TODO Email for contact us */

/**
 *
 * This is called in controller to send new password
 * @param String newPassword is expected to be a string 
 * @return boolean true if sending is okay.
 */
	 public function sendContactUs($content) {
	 	$email = $this->email;
	 	$email->subject($content['Users']['subject']);
	 	$emailOn = Configure::read('EMAIL_ON');
	 	if ($emailOn) {
	 		$result = $email->send($content['Users']['message']);
	 	} else {
	 		$result = $email;
	 	}
	 	return $result;

	}

}

