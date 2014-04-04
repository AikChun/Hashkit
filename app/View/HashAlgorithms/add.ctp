<div class="hashAlgorithms form">
<?php echo $this->Form->create('HashAlgorithm'); ?>
	<fieldset>
		<legend><?php echo __('Add Hash Algorithm'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hash Algorithms'), array('action' => 'index')); ?></li>
	</ul>
</div>
