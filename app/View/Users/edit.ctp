<div class="container">

	<div class="jumbotron">
		
		<div class="modal-header">
			
			<h2>Edit User</h2>

		</div>

		<br>

		<?php
			echo $this->Form->create('User', array('action' => 'edit', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Name:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('name', array(
						'class' => 'form-control',
						'placeholder' => 'Full Name',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Email:</label>

			<div class="col-lg-10">

				<?php
					echo $this->Form->input('email', array(
						'class' => 'form-control',
						'placeholder' => 'you@example.com',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Profile:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('profile', array(
						'class' => 'form-control',
						'placeholder' => 'User description',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Status:</label>

			<div class="col-lg-10">

				<?php
					echo $this->Form->input('status', array(
						'class' => 'form-control',
						'placeholder' => 'Status of current user',
						'label' => false
					));

				?>

			</div>

		</div>

		<div class="modal-footer">

		</div>
		
		<div class="pull-right">
			
			<div class="col-lg-5 pull-right">		

				<a href="/Users/index" class="btn btn-default">Back</a>
			
			</div>

			<div class="col-lg-5 pull-right">

				<?php

					$edit_user_save = array(
						'class' => 'btn btn-primary',
						'label' => 'Save'
					);

					echo $this->Form->end($edit_user_save);
					
				?>			

			</div>

		</div>
			
	</div>

</div>

<!--
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
		echo $this->Form->input('group_id');
		echo $this->Form->input('profile');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
-->