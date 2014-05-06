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
			for($i = 0; $i < sizeof($questions); $i++){
					echo $questions[$i].'<br><br>';
					echo 'You have selected: '.$data[$i].'<br>';
					echo 'The answer is: '.$answers[$i].'<br><br>';
				}

		?>
	
		<div class="modal-footer">

		</div>

		<div class="form-group">

				<a href="/" class="btn btn-primary pull-right" data-dismiss="modal">Back to Home</a>

		</div>
	
	</div>

</div>