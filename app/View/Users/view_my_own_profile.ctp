<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($data['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($data['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($data['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
			<?php echo h($data['User']['group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile'); ?></dt>
		<dd>
			<?php echo h($data['User']['profile']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

