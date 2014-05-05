<div class="container">
			
	<div class="jumbotron">
			
		<?php 

			$email = array('');

			echo $this->Form->create('HashTests');

		?>

		<div class="modal-header">

			<h2>Hash Algorithms</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->input('HashAlgorithm', array(
				'type'=>'select',
				'multiple'=>'checkbox',
				'label'=> false,
				'class'=>'listOfCheckBox',
				'options'=> array($data),
				'legend' => false
				));

		?>

		<br/>
		
		<div class="modal-footer">

			<?php

				$options = array(
					'class' => 'btn btn-primary pull-right',
					'label' => 'Next'
				);

			?>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>
		
</div>