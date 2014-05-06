<div class="container">
			
	<div class="jumbotron">
		
		<div class="modal-header">

			<h2>Hash Results</h2>

		</div>

		<br/>

		<?php

			if(!empty($output)) {

				echo '<b>Plaintext entered:</b>';
				echo '<br/>';

				$ptline = explode("\n",$output[0]['HashResult']['plaintext']);

				if(count($ptline > 1)) {

					foreach($ptline as $key1 => $data1){

						echo $data1;
						echo '<br/>';

					}

				}else {

					echo $output[0]['HashResult']['plaintext'];
					echo '<br/>';
					
				}

				echo '<br/>';

				foreach($output as $key1 => $data1) {

					$mdline = explode("\n",$data1['HashResult']['message_digest']);

					echo '<b>Selected Algorithm:</b>';
					echo '<br/>';
					echo $data1['HashResult']['hash_algorithm_name'];
					echo '<br/>';
					echo '<b>Message Digest:</b>';
					echo '<br/>';

					if (count($mdline) == 1) {
					
					foreach($mdline as $key2 => $data2) {

						echo $data2;
						echo '<br/>';
						echo '<br/>';

					}
				
				}else {

					foreach($mdline as $key2 => $data2) {

						if ($data2 == $mdline[(count($mdline)-1)]) {
							echo '<br/>';
						}else {
							echo $data2;
							echo '<br/>';
						}

					}

				}

				}

			}else if(empty($output)) {
				echo 'Please select and choose your choice of algorithm';
			}

		?>

		<div class="modal-footer">

		</div>

		<div class="form-group">

			<a href="/" class="btn btn-primary pull-right">Back to Home</a>

		</div>

	</div>

</div>