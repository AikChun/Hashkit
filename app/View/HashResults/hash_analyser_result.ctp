<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Message Digest Analyser Results</h2>

		</div>

		<br/>

		<?php

			if ($messagedigestlength != 0) {

				$bitSize = (int)$messagedigestlength * 4;

				echo '<b>Message Digest bit size: </b>';
				echo '<br/>';
				echo $bitSize;
				echo ' bits';
				echo '<br/>';
				echo '<br/>';

				echo '<b>Possible hash algorithm used:</b>';
				echo '<br/>';

				foreach($arrayofhashalgorithms as $key => $data) {

					echo $data['HashAlgorithmV1']['name'];
					echo '<br/>';
			
				}

			}else {
				echo 'Sorry! We are unable to find a match for your message digest.';
			}

		?>
	
		<div class="modal-footer">

			<a href="/HashTests/hash_analyser" class="btn btn-primary">Start New Test</a>
			<a href="/" class="btn btn-default">Back to Home</a>

		</div>

	</div>

</div>