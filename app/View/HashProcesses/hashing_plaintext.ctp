	<?php echo $this->Form->create('HashProcess', array('action' => 'HashingPlaintext'));?>
	<fieldset>
	<?php 
		echo $this->Form->input('HashProcess.plaintext', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Please enter your plaintext:'
		));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
