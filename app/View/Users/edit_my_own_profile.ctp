<div class="container">

	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('User', array('action' => 'edit_my_own_profile', 'class' => 'form-horizontal'));
			
		?>

		<div class="modal-header">

			<h2>Edit Profile</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label for="profile-name" class="col-lg-2 control-label">Name:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('name', array(
						'class' => 'form-control',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label for="profile-email" class="col-lg-2 control-label">Email:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('email', array(
						'class' => 'form-control',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label for="profile-profile" class="col-lg-2 control-label">Profile:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('profile', array(
						'class' => 'form-control',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="modal-footer">

			<div class="form-group">

					<?php

						$options = array(
							'class' => 'btn btn-primary',
							'label' => 'Save Changes'
						);

					?>

					<?php echo $this->Form->end($options); ?>

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
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('profile');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
-->