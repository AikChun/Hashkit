<div class="hashResults form">
<?php echo $this->Form->create('HashResult'); ?>
	<fieldset>
		<legend><?php echo __('Add Hash Result'); ?></legend>
	<?php
		echo $this->Form->input('plaint_text');
		echo $this->Form->input('message_digest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hash Results'), array('action' => 'index')); ?></li>
	</ul>
</div>
