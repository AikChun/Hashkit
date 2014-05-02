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
								
			<label for="hashInput-plaintext" class="col-lg-3 control-label">Please enter your new password:</label>

			<div class="col-lg-9">

				<?php
				
					echo $this->Form->input('User.new_password', array(
											'class' => 'form-control',
											'placeholder' => 'Enter your new password here',
											'label' => false,
											'type' => 'password'
					));
				
				?>

			</div>



		</div>


		<div class="form-group">
								
			<label for="hashInput-plaintext" class="col-lg-3 control-label">Re-enter your new password:</label>

			<div class="col-lg-9">

				<?php
				
					echo $this->Form->input('User.confirm_new_password', array(
											'class' => 'form-control',
											'placeholder' => 'Re-enter your password here',
											'label' => false,
											'type' => 'password'
					));

					echo $this->Form->input('User.id', array(
						'type' => 'hidden'
						)
					);
				
				?>

			</div>

			

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<?php

					$options = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Submit'
					);

				?>

			</div>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>

</div>
