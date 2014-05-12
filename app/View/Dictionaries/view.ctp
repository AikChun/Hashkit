<div class="dictionaries view">
<h2><?php echo __('Dictionary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dictionary['Dictionary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaintext'); ?></dt>
		<dd>
			<?php echo h($dictionary['Dictionary']['plaintext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Md5digest'); ?></dt>
		<dd>
			<?php echo h($dictionary['Dictionary']['md5digest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sha1digest'); ?></dt>
		<dd>
			<?php echo h($dictionary['Dictionary']['sha1digest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dictionary'), array('action' => 'edit', $dictionary['Dictionary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dictionary'), array('action' => 'delete', $dictionary['Dictionary']['id']), null, __('Are you sure you want to delete # %s?', $dictionary['Dictionary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictionaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictionary'), array('action' => 'add')); ?> </li>
	</ul>
</div>
