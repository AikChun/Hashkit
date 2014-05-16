<div class="container">
			
	<div class="jumbotron">
		
		<div class="modal-header">

			<h2>Hash Results</h2>

		</div>

		<br/>

		<?php

			if(!empty($output)) {

				$ptline = explode("\n",$output[0]['HashResult']['plaintext']);

				foreach($output as $key1 => $data1) {

					$mdline = explode("\n",$data1['HashResult']['message_digest']);

					echo '<b>Selected Algorithm:</b>';
					echo '<br/>';
					echo $data1['HashResult']['hash_algorithm_name'];
					echo '<br/>';
					echo '<b>Plaintext: Message Digest:</b>';
					echo '<br/>';

					if (count($mdline) == 1) {
					
						foreach($mdline as $key2 => $data2) {

							echo trim($ptline[0]);
							echo ': ';
							echo $data2;
							echo '<br/>';
							echo '<br/>';

						}
				
					}else {

						$indexCount = 0;

						foreach($mdline as $key2 => $data2) {

							if ($data2 == $mdline[(count($mdline)-1)]) {
								echo '<br/>';
							}else {

								echo trim($ptline[$indexCount]);
								echo ': ';
								echo $data2;
								echo '<br/>';
								$indexCount = $indexCount + 1;
								
							}

						}

					}

				}

			}else if(empty($output)) {
				echo 'No hash algorithm selected! Please start a new test.';
			}

		?>

		<div class="modal-footer">

			<?php

				echo $this->Form->create('HashResults', array('class' => 'form-horizontal', 'type' => 'file'));

				$basic_hashing_save = array(
					'class' => 'btn btn-warning pull-right',
					'label' => 'Save Results'
				);

			?>

			<div>
				
				<div class="col-lg-8.5 pull-right">

					<a href="/" class="btn btn-primary">Start New Test</a>
					<a href="/" class="btn btn-default">Back to Home</a>
				
				</div>

				<div class="col-lg-4 pull-right" style="left: 5px;">

					<?php
						echo $this->Form->end($basic_hashing_save);
					?>			

				</div>

			</div>

		</div>		

	</div>

</div>