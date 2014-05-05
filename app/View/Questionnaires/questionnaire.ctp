<div class="container">
			
	<div class="jumbotron">

		<?php echo $this->Form->create('HashTests',array('action' => 'avalanche_effect'));?>

		<div class="modal-header">

			<h2>Questionnaire</h2>

		</div>

		<br/>

		<div class="form-group">

			<?php

				$questions = array();
				$rand_keys = array_rand($result, 3);
				$num = 1;

				//$result[n][Questionaire]['attribute']

				for($i = 0; $i < sizeof($result); $i++){

					if (in_array("$i", $rand_keys)){
						echo $num++.'. '.$result[$i]['Questionnaire']['questions'].'<br><br><br>';
						
					}
					
				}
	

			?>

		</div>

		<div class="modal-footer">

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