<div>

<?php

echo $this->Form->create('User');

?>
	<fieldset>
		<legend><?php echo __('Registration'); ?></legend>
	<?php
		echo $this->Form->input('name', array('required'));
		echo $this->Form->input('email', array('required'));
		echo $this->Form->input('password', array('type' => 'password', 'required'));
		echo $this->Form->input('confirm_password', array('type' => 'password', 'required'));
		echo $this->Form->input('profile');
	?>
	<font color="grey">By clicking 'Sign up', you argee to the </font>
	<font color="blue"><u>Terms and Conditions</u></font>
	</fieldset>

<?php echo $this->Form->end(__('Sign up')); ?>
</div>
