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

			<?php

				if(count($ptline) > 1) {
				$collision_pt = $output[0]['HashResult']['collision_pt'];
				$collision_md = $output[0]['HashResult']['collision_md'];
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
	
		<div class="modal-footer">

		</div>

		<div class="form-group">

				<a href="/" class="btn btn-primary pull-right" data-dismiss="modal">Back to Home</a>

		</div>

	</div>

	<div class="form-group">

			<div class="col-lg-12">

				<?php

					$options = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Submit'
					);

				?>

			</div>

		</div>


</div>