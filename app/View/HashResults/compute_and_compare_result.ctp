<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Algorithm Recommendation</h2>

		</div>
			
		<br/>

		<?php

			if($output[0]['email'] != 1) {

			echo '<b>Plaintext entered:</b>';
			echo '<br/>';

			$ptline = explode("\n",$output[0]['HashResult']['plaintext']);
			
			if(count($ptline > 1)) {

				$asd = end($ptline);

				foreach($ptline as $key1 => $data1){

					echo $data1;

					if($asd != $data1) {
						echo '<br/>';
					}

				}

			}else {
				echo $output[0]['HashResult']['plaintext'];
			}

			echo '<br/>';
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

			echo '<b>Analysis:</b>';
			echo '<br/>';
			echo $output[0]['HashResult']['description'];
			echo '<br/>';
			echo '<br/>';
		?>


			<table class="table table-bordered table-condensed">
				<col align = "left">
				<col align = "left">
				<col align = "left">

			<?php

				if(count($ptline) > 1) {
				$collision_pt = $output[0]['HashResult']['collision_pt'];
				$collision_md = $output[0]['HashResult']['collision_md'];
				$collision_index = $output[0]['HashResult']['collision_index'];

			?>

			<tr>

				<td>

					<b>Plaintext</b>

				</td>

				<td>

					<b>
						<?php
							echo $output[0]['HashResult']['hash_algorithm_name'];
						?>
					</b>

					<b> Message Digest</b>

				</td>

				<td>

					<b>File Line<b>

				</td>

			</tr>

			<?php 

				foreach($output[0]['HashResult']['collision_pt'] as $key => $data):

			?>
			
			<tr>

				<td>

					<?php
						echo $collision_pt[$key];
					?>

				</td>

				<td>
					
					<?php
						echo $collision_md[$key];
					?>

				</td>

				<td>

					<?php

						echo $collision_index[$key] + 1;

					?>

				</td>
				
				<?php
					
					endforeach;
					}

				?>

			</tr>

		</table>

		<br/>

		<?php
			echo '<b>Comparing between selected algorithmn:</b>';
			echo '<br/>';
			echo '<br/>';

		?>
		
		<table class="table table-bordered table-condensed">
			
			<tr>

				<td>
			
					<b>Algorithm</b>
			
				</td>

				<?php 
					foreach($output as $key => $data):
				?>

				<td>

					<b>
						<?php 
							echo $data['HashResult']['hash_algorithm_name'];
						?>
					</b>

				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>

				<td>

					Output Length(bits)
				
				</td>
			
				<?php
					foreach($output as $key => $data):
				?>

				<td>
	
					<?php 
						echo $data['HashResult']['output_length'];
					?>
	
				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>

				<td>

					Speed(MB/s)
				
				</td>

				<?php
					foreach($output as $key => $data):
				?>

				<td>

					<?php echo $data['HashResult']['speed'];?>
				
				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>

				<td>

					Collision Resistence
				
				</td>

				<?php
					foreach($output as $key => $data):
				?>

				<td>

					<?php
						echo $data['HashResult']['collision_resistance'];
					?>
				
				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>

				<td>

					Preimage Resistence
				
				</td>

				<?php
					foreach($output as $key => $data):
				?>

				<td>

					<?php
						echo $data['HashResult']['preimage_resistance'];
					?>

				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>

				<td>

					2nd Preimage Resistence
				
				</td>

				<?php
					foreach($output as $key => $data):
				?>

				<td>
				
					<?php
						echo $data['HashResult']['2nd_preimage_resistance'];
					?>
				
				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>

				<td>

					Collision Best Known Attack
				
				</td>
				
				<?php
					foreach($output as $key => $data):
				?>
				
				<td>

					<?php
						echo $data['HashResult']['collision_bka'];
					?>

				</td>
				
				<?php
					endforeach;
				?>
			
			</tr>

			<tr>

				<td>

					Preimage Best Known Attack
				
				</td>

				<?php
					foreach($output as $key => $data):
				?>

				<td>

					<?php
						echo $data['HashResult']['preimage_bka'];
					?>

				</td>

				<?php
					endforeach;
				?>

			</tr>

			<tr>
				
				<td>

					2nd Preimage Best Known Attack
				
				</td>

				<?php
					foreach($output as $key => $data):
				?>

				<td>

					<?php
						echo $data['HashResult']['2nd_preimage_bka'];
					?>

				</td>

				<?php
					endforeach;
				?>

			</tr>

		</table>

		<?php

			$last = end($output);

			echo '<b>Recommended Hash Function:</b>';
			echo '<br/>';
			echo $last['HashResult']['recommendation'];

		?>
	
		<div class="modal-footer">

		</div>

		<div class="form-group">

			<?php

				echo $this->Form->create('HashResults', array('class' => 'form-horizontal', 'type' => 'file'));

				$options = array(
					'class' => 'btn btn-primary pull-left',
					'label' => 'Save Results'
				);

				echo $this->Form->end($options);
				echo '<a href="/" class="btn btn-default pull-right" data-dismiss="modal">Back to Home</a>';

			?>

		</div>		

		<?php

			}else {
				echo 'Hash results will be email to you shortly after computation is done.';
			}

		?>

	</div>

</div>