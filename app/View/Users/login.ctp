<div >

<?php

echo $this->Form->create('User', array('action' => 'login'));

?>

	<fieldset>
		<legend><?php echo __('Login'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forget_password'));
	?>
	</fieldset>

<?php
	echo $this->Form->end('Login');
?>

<!--
<?php

echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forget_password'));
echo $this->Form->end('Login');

?>
-->

</div>