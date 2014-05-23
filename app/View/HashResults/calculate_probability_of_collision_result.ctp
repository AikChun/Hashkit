<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Collision Probability Results</h2>

		</div>

		<br/>

		<?php

				//base - result from database (total hashes)
				//exponent - result from database (total hashes)
				//requiredbase - sample size base 
				//requiredexponent - sample size exponent
				//customizedalgorithmbase - base for (total hashes)
				//customizedalgorithmexponent - exponent for (total hashes)
				//samplespace - sample size hashes in value 
				//totalhash - size in total hashes

			if((int)$requiredbase != 0 && (int)$requiredexponent != 0){

				if((int)$customizedalgorithmbase == 0 && (int)$customizedalgorithmexponent == 0 && (int)$base == 0 && (int)$exponent == 0){
					echo "For the sample space of " . '<font color="red">'. $requiredbase . '</font><font style="vertical-align:super;font-size:50%;">'.'<sup>'. $requiredexponent . '</sup></font><font color="black">'. " complexity and the total size of hash function output " . '<font color="red">'. $totalhash . '<font color="black">' . " complexity ,";
				}elseif((int)$customizedalgorithmbase != 0 && (int)$customizedalgorithmexponent != 0 && (int)$base == 0 && (int)$exponent == 0){
					echo "For the sample space of " . '<font color="red">'. $requiredbase .'<sup>'. $requiredexponent . '</sup><font color="black">'. " complexity and the total size of hash function output " . '<font color="red">'. $customizedalgorithmbase .'<sup>'. $customizedalgorithmexponent . '</sup><font color="black">' . " complexity ,";

				}else{
					echo "For the sample space of " . '<font color="red">'. $requiredbase .'<sup>'. $requiredexponent .'</sup><font color="black">'. " complexity and the total size of hash function output " . '<font color="red">'. $base .'<sup>'. $exponent . '</sup><font color="black">' . " complexity ,";
				}

			}else {

				if((int)$customizedalgorithmbase == 0 && (int)$customizedalgorithmexponent == 0 && (int)$base == 0 && (int)$exponent == 0){
					echo "For the sample space of " . '<font color="red">'. $samplespace . '<font color="black">'. " complexity and the total size of hash function output " . '<font color="red">'. $totalhash . '<font color="black">' . " complexity ,";
				}elseif((int)$customizedalgorithmbase != 0 && (int)$customizedalgorithmexponent != 0 && (int)$base == 0 && (int)$exponent == 0){
					echo "For the sample space of " . '<font color="red">'. $samplespace . '<font color="black">'. " complexity and the total size of hash function output " . '<font color="red">'. $customizedalgorithmbase .'<sup>'. $customizedalgorithmexponent . '</sup><font color="black">' . " complexity ,";

				}else{
					echo "For the sample space of " . '<font color="red">'. $samplespace .'<font color="black">'. " complexity and the total size of hash function output " . '<font color="red">'. $base . '<sup>' . $exponent . '</sup><font color="black">' . " complexity ,";
				}
				
			}
		
		?>

		<br>

		<?php
			echo "The probability of getting a collision for the hash algorithm : " . round($probability,2) . " %";
		?>

		<br>

		<?php
			if($condition == 1){
				echo "The required sample space to get 99% probability of getting a collision:". '<font color="red">'. " 2<sup>" . $requiredsamplespace . '</sup></font color="black">'. " of complexity";
			}else{
				echo "The required sample space to get 99% probability of getting a collision: " . $requiredsamplespace . " of complexity";
			}
			
		?>

		<br>

		<div class="modal-footer">

			<a href="/HashTests/calculate_probability_of_collision" class="btn btn-primary">Start New Test</a>
			<a href="/" class="btn btn-default">Back to Home</a>
				
		</div>
	
	</div>

</div>