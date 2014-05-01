<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('Users', array('action' => 'reset_password', 'class' => 'form-horizontal'));
			
		?>

		<div class="modal-header">

			<h2>Password Reset</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label for="hashInput-plaintext" class="col-lg-3 control-label">Please enter your new password:</label>

			<div class="col-lg-9">

				<?php
				
					echo $this->Form->input('new_password', array(
											'class' => 'form-control',
											'placeholder' => 'Enter your new password here',
											'label' => false
					));
				
				?>

			</div>



		</div>


		<div class="form-group">
								
			<label for="hashInput-plaintext" class="col-lg-3 control-label">Re-enter your new password:</label>

			<div class="col-lg-9">

				<?php
				
					echo $this->Form->input('new_password1', array(
											'class' => 'form-control',
											'placeholder' => 'Re-enter your password here',
											'label' => false
					));
				
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