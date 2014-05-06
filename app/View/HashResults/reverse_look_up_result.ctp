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

		</div>

		<a href="/" class="btn btn-primary pull-right" data-dismiss="modal">Back to Home</a>

	</div>

</div>