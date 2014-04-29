<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('User', array('action' => 'login', 'class' => 'form-horizontal'));
			
		?>

		<div class="modal-header">

			<h2>Login</h2>

		</div>
			
		<br/>

		<div class="form-group">
								
			<label for="login-email" class="col-lg-2 control-label">Email:</label>

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

			<label for="login-password" class="col-lg-2 control-label">Password:</label>

			<div class="col-lg-10">

			<?php

				echo $this->Form->input('password', array(
					'class' => 'form-control',
					'placeholder' => 'Password',
					'label' => false,
					'required'));
				
			?>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<a href="/Users/forget_password" class="pull-right">Forgot your password?</a>
				<br/>

				<?php

					$options = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Login'
					);

				?>

			</div>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>

</div>