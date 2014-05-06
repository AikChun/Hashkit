<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Input</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->create('HashTests', array('action' => 'basic_hashing_input', 'class' => 'form-horizontal', 'type' => 'file'));
		?>

		<div class="form-group">
								
			<label class="col-lg-3 control-label">Please enter your plaintext:</label>

			<div class="col-lg-9">

				<?php
				
					echo $this->Form->input('plaintext', array(
						'class' => 'form-control',
						'placeholder' => 'Please enter your plaintext here',
						'label' => false
					));
				
				?>

			</div>

		</div>

		<div class="form-group">

			<center>

				<font style="font-size:200%">OR</font>
			
			</center>

		</div>

		<div class="form-group">

			<label class="col-lg-3 control-label" style="top: -5px;">Upload text file:</label>

				<div class="col-lg-9">

					<?php

						echo $this->Form->input('file_upload',array(
							'type' => 'file',
							'label' => false
						));
					
					?>

				</div>

		</div>

		<div class="modal-footer">

		</div>

		<?php

			$basic_hasing_next = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Next'
			);

			echo $this->Form->end($basic_hasing_next);

		?>

	</div>

</div>