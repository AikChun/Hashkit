<div class="container">
			
	<div class="jumbotron">

		<?php
			echo $this->Form->create('Users', array('action' => 'contact_us', 'class' => 'form-horizontal'));
		?>

		<div class="modal-header">

			<h2>Contact Us</h2>

		</div>
			
		<br/>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Name:</label>

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

			<label class="col-lg-2 control-label">Email:</label>

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
								
			<label class="col-lg-2 control-label">Subject:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('subject', array(
						'class' => 'form-control',
						'placeholder' => 'Email Subject',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Message:</label>

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

		<?php

			$contact_us_send = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Send'
			);

			echo $this->Form->end($contact_us_send);

		?>

	</div>

</div>