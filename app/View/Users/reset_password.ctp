<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('Users', array(
				'url' => Router::url(array(
					'action' => 'reset_password',
					'controller' => 'users',
					'?' => array('token' => $token) 
				)),
				'class' => 'form-horizontal'
			));
			?>

		<div class="modal-header">

			<h2>Password Reset</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label for="hashInput-plaintext" class="col-lg-4 control-label">Please enter your new password:</label>

			<div class="col-lg-8">

				<?php
				
					echo $this->Form->input('User.new_password', array(
											'class' => 'form-control',
											'placeholder' => 'Enter your new password here',
											'label' => false,
											'type' => 'password',
											'required'
					));
				
				?>

			</div>



		</div>


		<div class="form-group">
								
			<label for="hashInput-plaintext" class="col-lg-4 control-label">Re-enter your new password:</label>

			<div class="col-lg-8">

				<?php
				
					echo $this->Form->input('User.confirm_new_password', array(
						'class' => 'form-control',
						'placeholder' => 'Re-enter your password here',
						'label' => false,
						'type' => 'password',
						'required'
					));

					echo $this->Form->input('User.id', array(
						'type' => 'hidden'
					));
				
				?>

			</div>

			

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<?php

					$reset_password_submit = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Submit'
					);

				?>

			</div>

		</div>

		<div class="modal-footer">

			<?php
				echo $this->Form->end($reset_password_submit);
			?>

		</div>

	</div>

</div>

<script>
	
	$(document).ready(function() {

		$('#UsersResetPasswordForm').submit(function(event) {
			var password = $('#UserNewPassword').val();
			var confirmPassword = $('#UserConfirmNewPassword').val();

			try {
				var errorMessage = '';
				if(password != confirmPassword) {
					throw 'Your passwords do not match!';
				}
				if(password.search(/\d/) == -1) {
					errorMessage += 'must contain at least one number.\n';
				}

				if(password.search(/[a-zA-Z]/)) {
					errorMessage += 'must contain at least one character.\n';
				}

				if(password.length < 8) {
					errorMessage += 'must be at least 8 characters long.';
				}

				if(errorMessage != '') {
					throw 'Your password must contain' + errorMessage;
				}
			} catch (err) {
				alert(err);
				event.preventDefault();
			}

			
		});

	});

</script>
