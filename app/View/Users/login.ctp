<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Login</h2>

		</div>
			
		<br/>

		<?php 
		
			echo $this->Form->create('User', array('action' => 'login', 'class' => 'form-horizontal'));
			
		?>

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

		<a href="/Users/forget_password" class="pull-right">Forgot your password?</a>
		<br>

		<?php

			$options = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Login'
			);

			echo $this->Form->end($options);

		?>

	</div>

</div>