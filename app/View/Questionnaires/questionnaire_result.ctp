<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Questionnaire Result</h2>

		</div>
	
		<hr>

		<div class="selectedAlgorithm" style="font-size:160%">

			<?php
				echo 'You have got <b>'.$result.' out of 5.</b>';
			?>
		
		</div>

		</br></br>

		<?php

			$num = 1;

			for($i = 0; $i < sizeof($questions); $i++){

					echo '<b>'.$num++.'. '.$questions[$i].'</b><br><br>';
					echo 'You have selected: <b>'.$data[$i].'</b>';
					

					if ($data[$i] == $answers[$i]){
						echo "<img src='/img/green_tick.png'/>".'<br>';
					}else{
						echo "<img src='/img/red_cross.png' />".'<br>';
					}

					echo 'The answer is: <b>'.$answers[$i].'</b><br><br> ';
				
			}

		?>
	
		<div class="modal-footer">

			<a href="/Questionnaires/questionnaire" class="btn btn-primary">Take Quiz Again</a>
			<a href="/" class="btn btn-default">Back to Home</a>

		</div>
	
	</div>

</div>