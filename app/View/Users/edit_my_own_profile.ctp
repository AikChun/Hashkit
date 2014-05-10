<div class="container">

	<div class="jumbotron">

		<div class="modal-header">

			<h2>Edit Profile</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->create('User', array('action' => 'edit_my_own_profile', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Name:</label>

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

			<label class="col-lg-2 control-label">Profile:</label>

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

			<div class="col-lg-5.5 pull-right">		

				<a href="/users/view_my_own_profile" class="btn btn-default">Cancel</a>
			
			</div>

			<div class="col-lg-7 pull-right">

				<?php

					$edit_my_own_profile_save = array(
						'class' => 'btn btn-primary',
						'label' => 'Save Changes'
					);

					echo $this->Form->end($edit_my_own_profile_save);

				?>

			</div>

		</div>

	</div>

</div>