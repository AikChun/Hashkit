<div class="hashResults view">
<h2><?php echo __('Hash Result'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hashResult['HashResult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaintext'); ?></dt>
		<dd>
			<?php echo h($hashResult['HashResult']['plaintext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message Digest'); ?></dt>
		<dd>
			<?php echo h($hashResult['HashResult']['message_digest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hash Result'), array('action' => 'edit', $hashResult['HashResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hash Result'), array('action' => 'delete', $hashResult['HashResult']['id']), null, __('Are you sure you want to delete # %s?', $hashResult['HashResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hash Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hash Result'), array('action' => 'add')); ?> </li>
	</ul>
</div>
-->
