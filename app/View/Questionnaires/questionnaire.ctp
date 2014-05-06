<div class="container">
			
	<div class="jumbotron">

		<?php echo $this->Form->create('Questionnaires',array('action' => 'questionnaire'));?>

		<div class="modal-header">

			<h2>Questionnaire</h2>

		</div>

		<br/>

		<div class="form-group">

			<?php

				$num = 1;
				for($i = 0; $i < sizeof($questions); $i++){
					echo $num++.'. '.$questions[$i].'<br><br>';
					echo '<input type="radio" name= "'.$i.'" value="a" /> a<br>'; 
					echo '<input type="radio" name= "'.$i.'" value="b" /> b<br>';
					echo '<input type="radio" name= "'.$i.'" value="c" /> c<br><br>';
				}

				// for($i = 0; $i < sizeof($result); $i++){

				// 	if (in_array("$i", $rand_keys)){
				// 		echo $num.'. '.$result[$i]['Questionnaire']['questions'].'<br><br>';
				// 		array_push($answers, $result[$i]['Questionnaire']['answers']);

				// 		echo '<input type="radio" name= "'.$num.'" value="a" /> a<br>'; 
				// 		echo '<input type="radio" name= "'.$num.'" value="b" /> b<br>';
				// 		echo '<input type="radio" name= "'.$num.'" value="c" /> c<br><br>';

				// 		$num++;
				
				// 	}
					
				// }	

				

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