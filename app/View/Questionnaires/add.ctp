<div class="questionnaires form">
<?php echo $this->Form->create('Questionnaire'); ?>
	<fieldset>
		<legend><?php echo __('Add Questionnaire'); ?></legend>
	<?php
		echo $this->Form->input('questions');
		echo $this->Form->input('answers');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questionnaires'), array('action' => 'index')); ?></li>
	</ul>
</div>
