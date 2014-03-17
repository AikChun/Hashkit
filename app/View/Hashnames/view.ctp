<div class="hashnames view">
<h2><?php echo __('Hashname'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hashname['Hashname']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hashname['Hashname']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hashname'), array('action' => 'edit', $hashname['Hashname']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hashname'), array('action' => 'delete', $hashname['Hashname']['id']), null, __('Are you sure you want to delete # %s?', $hashname['Hashname']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hashnames'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hashname'), array('action' => 'add')); ?> </li>
	</ul>
</div>
