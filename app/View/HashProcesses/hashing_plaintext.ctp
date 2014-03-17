<?php 
	echo $this->Form->create('HashProcess', array('action' => 'HashingPlaintext'));
?>
	<fieldset>
		<legend> Get Your Hashing Fun!</legend>
		<?php 
			echo $this->Form->input('HashProcess.plaintext', array(
				'type' => 'text',
				'div' => false,
				'label' => 'Please enter your plaintext:'
			));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
