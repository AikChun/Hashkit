<div class="container">

	<div class="jumbotron">
		
		<div class="modal-header">
			
			<h2>Add User</h2>

		</div>

		<br>

		<?php
			echo $this->Form->create('User', array('action' => 'admin_add', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">

			<label class="col-lg-2 control-label">Name:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('name',array(
						'class' => 'form-control',
						'placeholder' => 'Full Name',
						'label' => false,
						'required'));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Email:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('email',array(
						'class' => 'form-control',
						'placeholder' => 'you@example.com',
						'label' => false,
						'required'));

				?>

			</div>
		
		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Password:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('password',array(
						'class' => 'form-control',
						'placeholder' => 'Password',
						'label' => false,
						'required'));
				
				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">User Group:</label>
	
			<div class="col-lg-3">

				<select class="form-control" name="data[User][group_id]">

					<option value="">(choose one)</option>
					<option value="1">Super Administrator</option>
					<option value="2">Administrator</option>
					<option value="3">Normal User</option>
				
				</select>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Profile:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('profile',array(
						'class' => 'form-control',
						'placeholder' => 'User Profile',
						'label' => false,
						'required'));
				
				?>

			</div>

		</div> 

		<div class="modal-footer">

			<div class="col-lg-5.5 pull-right">		

				<a href="/" class="btn btn-default">Cancel</a>
			
			</div>

			<div class="col-lg-7 pull-right">

				<?php

					$add_user_save = array(
						'class' => 'btn btn-primary',
						'label' => 'Add User'
					);

					echo $this->Form->end($add_user_save);
					
				?>			

			</div>

		</div>

	</div>

</div>