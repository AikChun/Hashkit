<div class="container">
			
	<div class="jumbotron">
			
		<?php

		echo $this->Form->create('User');

		?>

		<fieldset>

			<legend><?php echo __('Registration'); ?></legend>

			<?php

				echo $this->Form->input('name', array('required'));
				echo $this->Form->input('email', array('required'));
				echo $this->Form->input('password', array('type' => 'password', 'required'));
				echo $this->Form->input('confirm_password', array('type' => 'password', 'required'));
				echo $this->Form->input('profile');

			?>

			<font color="grey">By clicking 'Sign up', you argee to the </font>
			<font color="blue"><u>Terms and Conditions</u></font>

		</fieldset>

		<?php echo $this->Form->end(__('Sign up')); ?>

		<form class="form-horizontal">

			<div class="modal-header">

				<h4>Registration</h4>

			</div>

			<br/>

			<div class="form-group">
								
				<label for="register-name" class="col-lg-2 control-label">Name:</label>

				<div class="col-lg-10">

					<input type="text" class="form-control" id="register-name" placeholder="Full Name">

				</div>

			</div>

			<div class="form-group">
								
				<label for="register-email" class="col-lg-2 control-label">Email:</label>

				<div class="col-lg-10">

					<input type="text" class="form-control" id="register-email" placeholder="you@exampe.com">

				</div>

			</div>

			<div class="form-group">

				<label for="register-password" class="col-lg-2 control-label">Password:</label>

				<div class="col-lg-10">

					<input type="text" class="form-control" id="register-password" placeholder="Password">

				</div>

			</div>

			<div class="form-group">

				<label for="register-cPassword" class="col-lg-2 control-label">Confirm Password:</label>

				<div class="col-lg-10">

					<input type="text" class="form-control" id="register-cPassword" placeholder="Password">

				</div>

			</div>

			<div class="form-group">

				<label for="register-profile" class="col-lg-2 control-label">Profile:</label>

				<div class="col-lg-10">

					<textarea type="text" class="form-control" id="register-profile" rows="8" placeholder="Your description"></textarea>

				</div>

			</div>

			<div class="form-group">

				<div class="col-lg-12">

					<font color="grey" class="pull-right">By clicking 'Sign up', you argee to our 
					<a href="/">Terms and Conditions</a>.
					</font>
					<br/>
					<br/>
					<button class="btn btn-primary pull-right" type="submit">Sign Up</button>

				</div>

			</div>

		</form>

	</div>
		
</div>