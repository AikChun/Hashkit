<div class="hashResults container">
	
	<div class="Title" style="font-size:150%">
			<u>Analysis</u>
	</div>


	<?php
		if ($messagedigestlength != 0){
			$bitSize = (int)$messagedigestlength * 4;
			echo '<br>Bit size detected: <b>'.$bitSize.'bits</b><br><br>';
		
			echo '<u>Possible hash algorithm used</u><br>';
		

			foreach($arrayofhashalgorithms as $key => $data): 
				echo '<b>'.$data['HashAlgorithmV1']['name'].'</b><br>';
			endforeach;
		}
		else {

			echo '<div class="Title" style="font-size:150%">
					<br>Sorry! We are unable to find a match for your message digest.	
			</div>';
		}

	?>

	
	
</div>
