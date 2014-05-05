<div class="questionnaires view">
<h2><?php echo __('Questionnaire'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionnaire['Questionnaire']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Questions'); ?></dt>
		<dd>
			<?php echo h($questionnaire['Questionnaire']['questions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answers'); ?></dt>
		<dd>
			<?php echo h($questionnaire['Questionnaire']['answers']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questionnaire'), array('action' => 'edit', $questionnaire['Questionnaire']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Questionnaire'), array('action' => 'delete', $questionnaire['Questionnaire']['id']), null, __('Are you sure you want to delete # %s?', $questionnaire['Questionnaire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questionnaires'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questionnaire'), array('action' => 'add')); ?> </li>
	</ul>
</div>
