<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Reverse Look-up Result</h2>

		</div>

		<br/>

		<?php

			if(is_array($data)) {

				echo 'This is the plaintext equivalent of the message digest <br>';
				echo 'These are the matching plaintext values: <br>';

				foreach($data as $key => $value ) {
					echo $value['Dictionary']['plaintext'];
				}

			} else {
				echo 'There are no values matched to this message digest';
			}

		?>

		<div class="modal-footer">

			<a href="/HashTests/reverse_look_up" class="btn btn-primary">Start New Test</a>
			<a href="/" class="btn btn-default">Back to Home</a>
			
		</div>

	</div>

</div>