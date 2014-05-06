<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Avalanche Effect</h2>

		</div>

		<br/>
	
		<div class="selectedAlgorithm" style="font-size:180%">
			
			<?php
				echo 'Your selected algorithm is: <b>'. $output[0]['HashTests']['HashAlgorithm']. '</b><br><br>';
			?>

		</div>

		<?php

			echo 'This test is carried out by hashing some selected words and compare the output of the word before and after flipping the last bit of the input (in binary).<br>';
			echo 'For more information on cryptographic hash functions, click ';
			echo "<a href=http://hashkit.localhost/Pages/hash_function><u>here.</u></a><br><br>";

		?>

		<div class="subHeader" style="font-size:150%">
			
			<?php
				echo 'Test based on the word "Hello".<br><br>';
			?>

		</div>

		<?php

			echo '<u>Before flipping bit</u><br><br>';
			echo 'Before we flip the last bit of the word, we hash the word using the algorithm you have selected.<br><br>';
			echo 'Input Bits (Hello): 0100100001100101011011000110110001101111<br>';
			echo 'Output Bits: '. $output[1]. '<br><br>';
			echo '<u>After flipping bit</u><br><br>';
			echo 'Notice that the last bit of the input has been flipped (from 1 to 0), and this causes the word to change.<br>';
			echo 'Then, we proceed to hash this new word.<br><br>';
			echo 'Input Bits (Helln): 0100100001100101011011000110110001101110<br>';
			echo 'Output Bits: '. $output[2]. '<br><br>';
			echo '<u>Comparison in a glance</u><br><br>';
			echo 'Lastly, we compare the two message digest (output bits) we had gotten and we compare them to see how much changes there is.<br>';
			echo 'We have highlighted the <span style="background-color: #FFFF00">difference</span> of input bits in <span style="background-color: #FFFF00">yellow</span> and the <span style="background-color: #00FF00">same</span> bits of output bits in <span style="background-color: #00FF00">green</span><br><br>';
			echo 'Input Bits (Hello): 010010000110010101101100011011000110111<span style="background-color: #FFFF00">1</span><br>';
			echo 'Input Bits (Helln): 010010000110010101101100011011000110111<span style="background-color: #FFFF00">0</span><br><br>';
			echo 'Output Bits (Hello): ';

			for ($i = 0; $i < strlen($output[1]); $i++){

				if (in_array("$i", $output[3]['BitDiff'])){
					echo '<span class="digests" style="background-color: #00FF00">'.$output[1][$i].'</span>';
				}else {
					echo '<span class="digests">'.$output[1][$i].'</span>';
				}

			}

			echo '<br>Output Bits (Helln): ';

			for ($i = 0; $i < strlen($output[1]); $i++){

				if (in_array("$i", $output[3]['BitDiff'])){
					echo '<span class="digests" style="background-color: #00FF00">'.$output[2][$i].'</span>';
				}else {
					echo '<span class="digests">'.$output[2][$i].'</span>';
				}

			}

			echo '<br><br>Flipping a single bit on the input word "Hello" causes <b>'. $output[3]['Percent']. '%</b> changes in output bits.<br><br>';
		
		?>

		<div class="subHeader" style="font-size:150%">
			
			<?php
				echo 'More examples below...<br><br>';
			?>

		</div>

		<div class="subHeader" style="font-size:150%">

			<?php
				echo 'Test based on the word "Computer".<br><br>';
			?>

		</div>

		<?php

			echo '<u>Before flipping bit</u><br><br>';
			echo 'Input Bits (Computer): 0100001101101111011011010111000001110101011101000110010101110010<br>';
			echo 'Output Bits: '. $output[4]. '<br><br>';
			echo '<u>After flipping bit</u><br><br>';
			echo 'Input Bits (Computes): 0100001101101111011011010111000001110101011101000110010101110011<br>';
			echo 'Output Bits: '. $output[5]. '<br><br>';
			echo '<u>Comparison in a glance</u><br><br>';
			echo '<span style="background-color: #FFFF00">Difference</span> of input bits in <span style="background-color: #FFFF00">yellow</span> and the <span style="background-color: #00FF00">same</span> bits of output bits in <span style="background-color: #00FF00">green</span><br><br>';
			echo 'Input Bits (Computer): 010000110110111101101101011100000111010101110100011001010111001<span style="background-color: #FFFF00">0</span><br>';
			echo 'Input Bits (Computes): 010000110110111101101101011100000111010101110100011001010111001<span style="background-color: #FFFF00">1</span><br><br>';
			echo 'Output Bits (Computer): ';

			for ($i = 0; $i < strlen($output[4]); $i++){

				if (in_array("$i", $output[6]['BitDiff'])){
					echo '<span class="digests" style="background-color: #00FF00">'.$output[4][$i].'</span>';
				}else {
					echo '<span class="digests">'.$output[4][$i].'</span>';
				}

			}

			echo '<br>Output Bits (Computes): ';

			for ($i = 0; $i < strlen($output[4]); $i++){
				
				if (in_array("$i", $output[6]['BitDiff'])){
					echo '<span class="digests" style="background-color: #00FF00">'.$output[5][$i].'</span>';
				}else {
					echo '<span class="digests">'.$output[5][$i].'</span>';
				}

			}

			echo '<br><br>Flipping a single bit on the input word "Computer" causes <b>'. $output[6]['Percent']. '%</b> changes in output bits.<br><br>';

		?>

		<div class="subHeader" style="font-size:150%">

			<?php
				echo 'Test based on the word "Science".<br><br>';
			?>

		</div>

		<?php

			echo '<u>Before flipping bit</u><br><br>';
			echo 'Input Bits (Science): 01010011011000110110100101100101011011100110001101100101<br>';
			echo 'Output Bits: '. $output[7]. '<br><br>';
			echo '<u>After flipping bit</u><br><br>';
			echo 'Input Bits (Sciencd): 01010011011000110110100101100101011011100110001101100100<br>';
			echo 'Output Bits: '. $output[8]. '<br><br>';
			echo '<u>Comparison in a glance</u><br><br>';
			echo '<span style="background-color: #FFFF00">Difference</span> of input bits in <span style="background-color: #FFFF00">yellow</span> and the <span style="background-color: #00FF00">same</span> bits of output bits in <span style="background-color: #00FF00">green</span><br><br>';
			echo 'Input Bits (Science): 0101001101100011011010010110010101101110011000110110010<span style="background-color: #FFFF00">1</span><br>';
			echo 'Input Bits (Sciencd): 0101001101100011011010010110010101101110011000110110010<span style="background-color: #FFFF00">0</span><br><br>';
			echo 'Output Bits (Science): ';

			for ($i = 0; $i < strlen($output[7]); $i++){
				
				if (in_array("$i", $output[9]['BitDiff'])){
					echo '<span class="digests" style="background-color: #00FF00">'.$output[7][$i].'</span>';
				}else {
					echo '<span class="digests">'.$output[7][$i].'</span>';
				}

			}

			echo '<br>Output Bits (Sciencd): ';

			for ($i = 0; $i < strlen($output[7]); $i++){

				if (in_array("$i", $output[9]['BitDiff'])){
					echo '<span class="digests" style="background-color: #00FF00">'.$output[8][$i].'</span>';
				}else {
					echo '<span class="digests">'.$output[8][$i].'</span>';
				}

			}

			echo '<br><br>Flipping a single bit on the input word "Science" causes <b>'. $output[9]['Percent']. '%</b> changes in output bits.';

		?>

		<div class="modal-footer">

		</div>

		<a href="/" class="btn btn-primary pull-right">Back to Home</a>
	
	</div>

</div>