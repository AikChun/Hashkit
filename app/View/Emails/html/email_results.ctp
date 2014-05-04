<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Algorithm Recommendation</h2>

		</div>
			
		<br/>

		<table>

			<tr>

				<td>
			
					<b>Plaintext entered: </b>
			
				</td>
			
			</tr>

			<?php 
			
				$ptline = explode("\n",$output[0]['HashResult']['plaintext']);
				if(count($ptline > 1)) { 
			
			?>

			<tr>

				<?php foreach($ptline as $key1 => $data1):?>

				<td>

					<?php 
						echo $data1;
					?>
				
				</td>

			</tr>

			<?php
			
				endforeach;
				}else { 

			?>

			<tr>

				<td>

					<?php
						echo $output[0]['HashResult']['plaintext'];
					?>

				</td>
			
			</tr>

			<?php
				}
			?>

		</table>

		<br/>

		<table>
			
			<?php

				foreach($output as $key1 => $data1):
				$mdline = explode("\n",$data1['HashResult']['message_digest']);

			?>

			<tr>
				
				<td>
					
					<b>Selected Algorithm:</b>
					<?php
						echo $data1['HashResult']['hash_algorithm_name'];
					?>

				</td>

			</tr>

			<tr>

				<td>

					<b>Message Digest:</b>

				</td>

			</tr>

					<?php

						foreach($mdline as $key2 => $data2):
					?>	

						<tr>
						<td>
						<?php
						echo $data2;
						?>

						<br>
						</td>
						</tr>

						<?php
						endforeach;
						endforeach;
					
					?>
		</table>

		<br/>
			
					<b>Analysis: </b>

			
			
					<?php
						echo $output[0]['HashResult']['description'];
					?>
			
					<br/>
			
				</td>
			
			</tr>

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

		<b>Comparing between selected algorithmn:</b><br/><br/>

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
		?>

		<table>

			<tr>
				
				<td>

					<b>Recommended Hash Function:<b>
				
				</td>
			
			</tr>

			<tr>

				<td>

					<?php
						echo $last['HashResult']['recommendation'];
					?>
			
				</td>
			
			</tr>

		</table>

		<br>

		<b><p>You can also login to <a href="http://hashkit.localhost"> http://hashkit.localhost </a> to view your hash results from hash results history</p><b>

			<br>

	</div>

</div>