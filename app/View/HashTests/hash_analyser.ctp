<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Message Digest Analyser</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->create('HashTests', array('action' => 'hash_analyser', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">
								
			<label class="col-lg-4 control-label">Please enter the message digest:</label>

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

		</div>

		<?php

			$options = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Next'
			);

			echo $this->Form->end($options);
			
		?>

	</div>

</div>