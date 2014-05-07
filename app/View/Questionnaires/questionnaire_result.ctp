<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Questionnaire Result</h2>

		</div>
	
		<hr>

		<div class="selectedAlgorithm" style="font-size:160%">
			<?php
				echo 'You have got <b>'.$result.' out of 3.</b>';
			?>
		</div>

		</br></br>

		<?php
			$num = 1;
			for($i = 0; $i < sizeof($questions); $i++){
					echo '<b>'.$num++.'. '.$questions[$i].'</b><br><br>';
					echo 'You have selected: <b>'.$data[$i].'</b><br>';
					echo 'The answer is: <b>'.$answers[$i].'</b> ';
					if ($data[$i] == $answers[$i]){
						echo "<img src='/img/green_tick.png'/>".'<br><br>';


					}
					else{
						echo "<img src='/img/red_cross.png' />".'<br><br>';

					}
				}

		?>
	
		<div class="modal-footer">

		</div>

		<div class="form-group">

				<a href="/" class="btn btn-primary pull-right" data-dismiss="modal">Back to Home</a>

		</div>
	
	</div>

</div>