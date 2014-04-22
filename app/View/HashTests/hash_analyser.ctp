<div class="HashTests view">
	Hash analyser 
	<?php echo $this->Form->create('HashTests',array('action' => 'hash_analyser'));?>
	
	<?php
		echo $this->Form->input('messagedigest', array(
		'type' => 'text',
		'div' => false,
		'label' => 'Please insert the message digest:'
	)); ?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
