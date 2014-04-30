<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('HashTests', array('action' => 'hash_analyser', 'class' => 'form-horizontal'));
			
		?>

		<div class="modal-header">

			<h2>Message Digest Analyser</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label for="hash_analyser-input" class="col-lg-4 control-label">Please enter the message digest:</label>

			<div class="col-lg-8">

				<?php

					echo $this->Form->input('messagedigest', array(
						'class' => 'form-control',
						'placeholder' => 'Message Digest',
						'label' => false,
						'required'
					));

				?>

			</div>

		</div>

		<div class="modal-footer">

				<div class="col-lg-12">

					<?php

						$options = array(
							'class' => 'btn btn-primary pull-right',
							'label' => 'Next'
						);

					?>

				</div>

		</div>

		<?php echo $this->Form->end($options); ?>
	
	</div>

</div>