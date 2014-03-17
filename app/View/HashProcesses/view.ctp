<div class="hashProcesses view">
<h2><?php echo __('Hash Process'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hashProcess['HashProcess']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaintext'); ?></dt>
		<dd>
			<?php echo h($hashProcess['HashProcess']['plaintext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message Digest'); ?></dt>
		<dd>
			<?php echo h($hashProcess['HashProcess']['message_digest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hash Process'), array('action' => 'edit', $hashProcess['HashProcess']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hash Process'), array('action' => 'delete', $hashProcess['HashProcess']['id']), null, __('Are you sure you want to delete # %s?', $hashProcess['HashProcess']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hash Processes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hash Process'), array('action' => 'add')); ?> </li>
	</ul>
</div>
