<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		?>
	<label>Choose Group:</label>
	 <select name="data[User][group_id]">
        <option value="">(choose one)</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
	<?php
		echo $this->Form->input('profile');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
