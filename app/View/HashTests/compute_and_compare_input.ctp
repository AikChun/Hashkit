<div class="container">
			
	<div class="jumbotron">

		<?php 
		
			echo $this->Form->create('HashTests', array('action' => 'compute_and_compare_input', 'class' => 'form-horizontal', 'type' => 'file'));
			
		?>

		<div class="modal-header">

			<h2>Hash Input</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label for="hashInput-plaintext" class="col-lg-3 control-label">Please enter your plaintext:</label>

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

			<label for="hashInput-file" class="col-lg-3 control-label">Upload text file:</label>

				<div class="col-lg-9">

						<?php

							echo $this->Form->input('file_upload',array(
													'type' => 'file',
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