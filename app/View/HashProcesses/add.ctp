<div class="hashProcesses form">
<?php echo $this->Form->create('HashProcess'); ?>
	<fieldset>
		<legend><?php echo __('Add Hash Process'); ?></legend>
	<?php
		echo $this->Form->create('plaintext');
		echo $this->Form->input('message_digest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hash Processes'), array('action' => 'index')); ?></li>
	</ul>
</div>
