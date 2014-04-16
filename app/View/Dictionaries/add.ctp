<div class="dictionaries form">
<?php echo $this->Form->create('Dictionary'); ?>
	<fieldset>
		<legend><?php echo __('Add Dictionary'); ?></legend>
	<?php
		echo $this->Form->input('plaintext');
		echo $this->Form->input('md5digest');
		echo $this->Form->input('sha1digest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dictionaries'), array('action' => 'index')); ?></li>
	</ul>
</div>
