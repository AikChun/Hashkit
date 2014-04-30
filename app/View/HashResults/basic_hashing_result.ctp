<div class="container">
			
	<div class="jumbotron">
		
		<div class="modal-header">

			<h2>Hash Results</h2>

		</div>

		<br/>

		<?php
			if(!empty($output)) :
		?>

			<table>

				<tr>
					<td><b>Plaintext entered: </b></td>
				</tr>
				
				<?php 
					$ptline = explode("\n",$output[0]['HashResult']['plaintext']);
				?>
				
				<?php
					if(count($ptline > 1)) { 
				?>
				
				<tr>

				<?php
					foreach($ptline as $key1 => $data1):
				?>
				
					<td>

					<?php
						echo $data1;
					?>

					</td>

				</tr>

				<?php 

					endforeach;
					}else{

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

						<b>Selected Algorithm: </b><br/>

						<?php 
							echo $data1['HashResult']['hash_algorithm_name'];
						?>

					</td>
				</tr>

				<tr>
				
					<td>
						<br/>
						<b>Message Digest: </b>
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

					</td>
				
				<?php 
				
					endforeach;
					endforeach;

				?>

				
				</tr>

			</table>

			<?php
			
				endif;
				if(empty($output)) :
				
			?>

			Please select and choose your choice of algorithm.
		
		<?php

			endif;
		?>

		<div class="modal-footer">

		<a href="/" class="btn btn-primary pull-right" data-dismiss="modal">Back to Home</a>

		</div>

	</div>

</div>