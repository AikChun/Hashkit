<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Registration'); ?></legend>
	<?php
		echo $this->Form->input('name', array('required'));
		echo $this->Form->input('email', array('required'));
		echo $this->Form->input('password', array('type' => 'password', 'required'));
		echo $this->Form->input('confirm_password', array('type' => 'password', 'required'));
		echo $this->Form->input('group_id', array('type' => 'hidden', 'value' => 2));
		echo $this->Form->input('profile');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
