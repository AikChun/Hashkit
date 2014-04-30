<div class="container">
	<div class = "jumbotron">
		<h2><?php echo __('User Information'); ?></h2>
		<table class="table table-striped table-hover" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo __('Name'); ?></td>
			<td><?php echo __('Email'); ?></td>
			<td><?php echo __('Group Id'); ?></td>
			<td><?php echo __('Profile'); ?></td>
			<td><?php echo __('Status'); ?></td>
		</tr>
		<tr>
			<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['group_id']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['profile']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
		</tr>
		</table>
	
	<h2><?php echo __('Actions'); ?></h2>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
	</div>
</div>

