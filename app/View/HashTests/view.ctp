<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Your Hash Result</h2>

		</div>
			
		<br/>

		<?php

			echo '<b>Plaintext entered:</b>';
			echo '<br/>';

			$ptline = explode("\n",$hashresult[0]['HashResult']['plaintext']);
			
			if(count($ptline > 1)) {

				$asd = end($ptline);

				foreach($ptline as $key1 => $data1){

					echo $data1;

					if($asd != $data1) {
						echo '<br/>';
					}

				}

			}else {
				echo $hashresult[0]['HashResult']['plaintext'];
			}

			echo '<br/>';
			echo '<br/>';

			foreach($hashresult as $key1 => $data1) {
				
				$mdline = explode("\n",$data1['HashResult']['message_digest']);

				echo '<b>Selected Algorithm:</b>';
				echo '<br/>';
				echo $hashalgorithm[$key1]['HashAlgorithm']['name'];
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

			if($hashtest['HashTest']['analysis'] != 'Basic Hashing') {

				echo '<b>Analysis:</b>';
				echo '<br/>';
				echo $hashtest['HashTest']['analysis'];
				echo '<br/>';
				echo '<br/>';

				if($hashtest['HashTest']['collision_count'] > 1) {

					echo '<table class="table table-bordered table-condensed">';

							$collision_pt = explode("\n", $hashtest['HashTest']['collision_pt']);
							$collision_md = explode("\n", $hashtest['HashTest']['collision_md']);
							$collision_index = explode(" ", $hashtest['HashTest']['collision_index']);

							echo '<tr>';

								echo '<td>';
									echo '<b>Plaintext</b>';
								echo '</td>';

								echo '<td>';
									echo '<b>';
									echo $hashalgorithm[0]['HashAlgorithm']['name'];
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

		?>

		<?php

			echo '<b>Comparing between selected algorithmn:</b>';
			echo '<br/>';
			echo '<br/>';

			echo '<table class="table table-bordered table-condensed">';

				echo '<tr>';

					echo '<td>';
						echo '<b>Algorithm</b>';
					echo '</td>';

					foreach($hashalgorithm as $key => $data) {
						
						echo '<td>';
							echo '<b>';
							echo $data['HashAlgorithm']['name'];
							echo '</b>';
						echo '</td>';

					}

				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo 'Output Length(bits)';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['output_length'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo 'Speed(MB/s)';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['speed'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo 'Collision Resistence';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['collision_resistance'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo 'Preimage Resistence';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['preimage_resistance'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo '2nd Preimage Resistence';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['2nd_preimage_resistance'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo 'Collision Best Known Attack';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['collision_bka'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo 'Preimage Best Known Attack';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['preimage_bka'];
						echo '</td>';

					}
				
				echo '</tr>';

				echo '<tr>';

					echo '<td>';
						echo '2nd Preimage Best Known Attack';
					echo '</td>';
					
					foreach($hashalgorithm as $key => $data) {

						echo '<td>';
							echo $data['HashAlgorithm']['2nd_preimage_bka'];
						echo '</td>';

					}
				
				echo '</tr>';

			echo '</table>';

			echo '<b>Recommended Hash Function:</b>';
			echo '<br/>';
			echo $hashtest['HashTest']['recommendation'];

		}
		?>
	
		<div class="modal-footer">

			<?php

				echo $this->Form->create('HashResults', array('class' => 'form-horizontal', 'type' => 'file'));

				$compute_and_compare_save = array(
					'class' => 'btn btn-primary pull-left',
					'label' => 'Save Results'
				);

			?>

			<div class="pull-right">
				
				<div class="col-lg-6 pull-right">

					<a href="/HashTests/show_test_results" class="btn btn-default pull-right">Back to History</a>
				
				</div>

				<div class="col-lg-5 pull-right">

					<?php
						echo $this->Form->end($compute_and_compare_save);
					?>			

				</div>

			</div>

		</div>

	</div>

</div>