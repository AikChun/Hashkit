<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Reverse Look-up</h2>

		</div>
			
		<br/>

		<?php
			echo $this->Form->create('HashTests', array('action' => 'reverse_look_up', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">

			<label class="col-lg-2 control-label">Message Digest:</label>

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

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Hash Algorithms:</label>

			<div class="col-lg-2">

				<?php

					echo $this->Form->input('hash_algorithm_name', array(
						'class' => 'form-control',
						'options'=> $data,
						'label' => false
						)
					);

				?>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<?php

			$reverse_lookup_next = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Next'
			);

			echo $this->Form->end($reverse_lookup_next)
		
		?>

	</div>

</div>