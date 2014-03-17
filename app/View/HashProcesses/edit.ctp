<div class="hashprocesses form">
<?php echo $this->Form->create('Hashprocess'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hashprocess'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plaintext');
		echo $this->Form->input('message_digest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hashprocess.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hashprocess.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hashprocesses'), array('action' => 'index')); ?></li>
	</ul>
</div>
