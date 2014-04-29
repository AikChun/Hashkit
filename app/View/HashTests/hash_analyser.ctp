<div class="HashTests container">
	<?php echo $this->Form->create('HashTests',array('action' => 'hash_analyser'));?>
	<div class="Title" style="font-size:150%">	
		Message Digest Analyser
	</div>

	<br>
	<?php
		echo $this->Form->input('messagedigest', array(
		'type' => 'text',
		'div' => false,
		'label' => 'Please insert a message digest: '
	)); ?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
