<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('Pages', array('action' => 'contact_us', 'class' => 'form-horizontal'));
			
		?>

		<div class="modal-header">

			<h2>Contact Us</h2>

		</div>
			
		<br/>

		<div class="form-group">
								
			<label for="contact_us-name" class="col-lg-2 control-label">Name:</label>

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

			<label for="contact_us-email" class="col-lg-2 control-label">Email:</label>

			<div class="col-lg-10">

			<?php

				echo $this->Form->input('email', array(
					'class' => 'form-control',
					'placeholder' => 'Email Address',
					'label' => false,
					'required'));
				
			?>

			</div>

		</div>

		<div class="form-group">

			<label for="contact_us-message" class="col-lg-2 control-label">Message:</label>

			<div class="col-lg-10">

			<?php

				echo $this->Form->input('message', array(
					'class' => 'form-control',
					'rows' => '10',
					'placeholder' => 'Your message to us!',
					'label' => false,
					'required'));
				
			?>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<?php

					$options = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Send'
					);

				?>

			</div>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>

</div>