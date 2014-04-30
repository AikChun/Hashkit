<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Reverse Look-up Results</h2>

		</div>

		<br/>

		<?php

			if ($messagedigestlength != 0){

				$bitSize = (int)$messagedigestlength * 4;
				echo '<br>Bit size detected: <b>'.$bitSize.'bits</b><br><br>';
			
				echo '<u>Possible hash algorithm used</u><br>';			

				foreach($arrayofhashalgorithms as $key => $data): 
					echo '<b>'.$data['HashAlgorithmV1']['name'].'</b><br>';
				endforeach;

			}else {
				echo 'Sorry! We are unable to find a match for your message digest.';
			}

		?>
	
		<div class="modal-footer">

		</div>

		<div class="form-group">

				<a href="/" class="btn btn-primary pull-right" data-dismiss="modal">Back to Home</a>

		</div>

	</div>

</div>