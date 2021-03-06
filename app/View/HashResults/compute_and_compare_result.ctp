<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Algorithm Recommendation</h2>

		</div>
			
		<br/>

		<?php

			if(empty($output)) {

				echo 'No hash algorithm selected! Please start a new test.';
				echo '<div class="modal-footer">';
					echo '<a href="/" class="btn btn-primary">Start New Test</a>';
					echo '<a href="/" class="btn btn-default">Back to Home</a>';
				echo '</div>';
			
			}else {	

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

				echo '<b>Analysis:</b>';
				echo '<br/>';
				echo $output[0]['HashResult']['description'];
				echo '<br/>';
				echo '<br/>';

				if(($output[0]['HashResult']['collision_count']) > 1) {

						echo '<table class="table table-bordered table-condensed">';

							$collision_pt = explode("\n", $output[0]['HashResult']['collision_pt']);
							$collision_md = explode("\n", $output[0]['HashResult']['collision_md']);
							$collision_index = explode(" ", $output[0]['HashResult']['collision_index']);

							echo '<tr>';

								echo '<td>';
									echo '<b>Plaintext</b>';
								echo '</td>';

								echo '<td>';
									echo '<b>';
									echo $output[0]['HashResult']['hash_algorithm_name'];
									echo '</b>';
									echo '<b> Message Digest</b>';
								echo '</td>';

								echo '<td>';
									echo '<b>File Line</b>';
								echo '</td>';

							echo '</tr>';

							foreach($collision_pt as $key => $data) {

								echo '<tr>';

									echo '<td>';
										echo $collision_pt[$key];
									echo '</td>';

									echo '<td>';
										echo $collision_md[$key];
									echo '</td>';
									
									echo '<td>';
										echo $collision_index[$key] + 1;
									echo '</td>';

								echo '</tr>';

							}

					echo '</table>';

				}

				echo '<b>Comparing between selected algorithmn:</b>';
				echo '<br/>';
				echo '<br/>';

				echo '<table class="table table-bordered table-condensed">';

					echo '<tr>';

						echo '<td>';
							echo '<b>Algorithm</b>';
						echo '</td>';

						foreach($output as $key => $data) {
							
							echo '<td>';
								echo '<b>';
								echo $data['HashResult']['hash_algorithm_name'];
								echo '</b>';
							echo '</td>';

						}

					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo 'Output Length(bits)';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['output_length'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo 'Speed(MB/s)';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['speed'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo 'Collision Resistence';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['collision_resistance'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo 'Preimage Resistence';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['preimage_resistance'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo '2nd Preimage Resistence';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['2nd_preimage_resistance'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo 'Collision Best Known Attack';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['collision_bka'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo 'Preimage Best Known Attack';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['preimage_bka'];
							echo '</td>';

						}
					
					echo '</tr>';

					echo '<tr>';

						echo '<td>';
							echo '2nd Preimage Best Known Attack';
						echo '</td>';
						
						foreach($output as $key => $data) {

							echo '<td>';
								echo $data['HashResult']['2nd_preimage_bka'];
							echo '</td>';

						}
					
					echo '</tr>';

				echo '</table>';

				$last = end($output);

				echo '<b>Recommended Hash Function:</b>';
				echo '<br/>';
				echo $last['HashResult']['recommendation'];

		?>
			
		<div class="modal-footer">

			<?php

				echo $this->Form->create('HashResults', array('class' => 'form-horizontal', 'type' => 'file'));

				$compute_and_compare_save = array(
					'class' => 'btn btn-warning pull-right',
					'label' => 'Save Results'
				);

			?>

			<div>
				
				<div class="col-lg-8.5 pull-right">

					<a href="/HashTests/compute_and_compare" class="btn btn-primary">Start New Test</a>
					<a href="/" class="btn btn-default">Back to Home</a>
				
				</div>

				<div class="col-lg-4 pull-right" style="left: 5px;">

					<?php
						echo $this->Form->end($compute_and_compare_save);
					?>			

				</div>

			</div>

		</div>

		<?php
			}
		?>

	</div>

</div>