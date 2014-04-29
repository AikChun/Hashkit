<div class="container">
			
	<div class="jumbotron">
			
		<?php 

			$email = array('');

			echo $this->Form->create('HashTests');
			echo '<h2>Algorithms</h2>';
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
		
		<?php

			echo $this->Form->end(__('Next'));

		?>

	</div>
		
</div>