<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Algorithms</h2>

		</div>

		<br/>

		<?php 

			$email = array('');

			echo $this->Form->create('HashTests');
			echo $this->Form->input('HashAlgorithm', array(
				'type'=>'select',
				'multiple'=>'checkbox',
				'label'=> false,
				'class'=>'listOfCheckBox',
				'options'=> array($data),
				'legend' => false
				));

		?>
		
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