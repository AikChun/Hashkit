<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('HashTests', array('action' => 'reverse_look_up', 'class' => 'form-horizontal'));
			
		?>

		<div class="modal-header">

			<h2>Reverse Look-up</h2>

		</div>
			
		<br/>

		<div class="form-group">
								
			<label for="reverse_look_up-algorithms" class="col-lg-2 control-label">Hash Algorithms:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('hash_algorithm_name', array(
											'options' => $data 
					));

				?>

			</div>

		</div>

		<div class="form-group">

			<label for="reverse_look_up-message_digest" class="col-lg-2 control-label">Message Digest:</label>

			<div class="col-lg-10">

			<?php

				echo $this->Form->input('message_digest', array(
					'class' => 'form-control',
					'placeholder' => 'Message Digest',
					'label' => false,
					'required'));
				
			?>

			</div>

		</div>

		<div class="modal-footer">

			<div class="col-lg-12">

				<?php

					$reverse_lookup_next = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Next'
					);

				?>

			</div>

		</div>

		<?php echo $this->Form->end($reverse_lookup_next); ?>

		<?php
		echo $this->Form->create('HashTests');
			echo $this->Form->input('hash_algorithm_name', array(
		    'options' => $data 
			));
		echo $this->Form->input('message_digest', array(
		'type' => 'text',
		'div' => false,
		'label' => 'Please enter your message digest:'
		));
		echo $this->Form->end(__('Submit'));

		?>
	
	</div>

</div>