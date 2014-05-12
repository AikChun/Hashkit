<div class="container">

	<div class="jumbotron">
		
		<div class="modal-header">
			
			<h2>User Information</h2>

		</div>

		<br>

		<?php
			echo $this->Form->create('User', array('class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">ID:</label>

			<div class="col-lg-10">

				<?php
					echo h($user['User']['id']);
				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">Name:</label>

			<div class="col-lg-10">

				<?php
					echo h($user['User']['name']);
				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">Email:</label>

			<div class="col-lg-10">

				<?php
					echo h($user['User']['email']);
				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">User Group:</label>

			<div class="col-lg-10">

				<?php

					if (h($user['User']['group_id']) == 1) {
						echo 'Super Administrator';
					} elseif (h($user['User']['group_id']) == 2) {
						echo 'Administrator';
					} elseif (h($user['User']['group_id']) == 3) {
						echo 'Normal User';
					}

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">Profile:</label>

			<div class="col-lg-10">

				<?php
					echo h($user['User']['profile']);
				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">Status:</label>

			<div class="col-lg-10">

				<?php

					$status = h($user['User']['status']);

					if ($status == "") {
						echo "-";
					} else {
						echo $status;
					}

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">Date/Time Created:</label>

			<div class="col-lg-10">

				<?php
					echo h($user['User']['created']);
				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label" style="top: -7px;">Date/Time Modified:</label>

			<div class="col-lg-10">

				<?php
					echo h($user['User']['modified']);
				?>

			</div>

		</div>

		<div class="modal-footer">

			<div class="btn-toolbar pull-right">
		
				<a href="/Users/edit/<?php echo $user['User']['id']; ?>" class="btn btn-primary">Edit User</a>
				<a href="/Users/delete/<?php echo $user['User']['id']; ?>" class="btn btn-danger">Delete User</a>
				<a href="/Users/index" class="btn btn-default">Back</a>

			</div>

		</div>

	</div>

</div>

<!--
<div class="container">
	<div class = "jumbotron">
		<h2><?php echo __('User Information'); ?></h2>
		
	<h2><?php echo __('Actions'); ?></h2>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
	</div>
</div>
-->