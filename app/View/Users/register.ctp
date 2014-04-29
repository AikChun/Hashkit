<div class="container">
			
	<div class="jumbotron">

		<?php

			echo $this->Form->create('User', array('action' => 'register', 'class' => 'form-horizontal'));

		?>

		<div class="modal-header">

			<h2>Registration</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label for="register-name" class="col-lg-2 control-label">Name:</label>

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
								
			<label for="register-email" class="col-lg-2 control-label">Email:</label>

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

			<label for="register-password" class="col-lg-2 control-label">Password:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('password', array(
						'class' => 'form-control',
						'placeholder' => 'Password',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label for="register-cPassword" class="col-lg-2 control-label">Confirm Password:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('confirm_password', array(
						'class' => 'form-control',
						'placeholder' => 'Password',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label for="register-profile" class="col-lg-2 control-label">Profile:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('profile', array(
						'class' => 'form-control',
						'placeholder' => 'Your description',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<font color="grey" class="pull-right">By clicking 'Sign up', you argee to our <a href="/">Terms and Conditions</a>.
				</font>
				<br/>
				<?php

					$options = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Sign Up'
					);

				?>

			</div>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>
		
</div>