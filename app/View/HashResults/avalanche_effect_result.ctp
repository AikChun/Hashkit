<div class="container nowrap">

	<div class="selectedAlgorithm" style="font-size:200%">
		<?php
		echo 'Your selected algorithm is <b>'. $output[0]['HashTests']['HashAlgorithm']. '</b><br><br>';
		?>
	</div>

	<div class="subHeader" style="font-size:125%">
		<?php
		echo 'Test based on the word "Hello".<br><br>';
		?>
	</div>

	<?php
	echo '<u>Before flipping bit</u><br><br>';
	echo 'Input Bits (Hello): 0100100001100101011011000110110001101111<br>';
	echo 'Output Bits: '. $output[1]. '<br><br>';

	echo '<u>After flipping bit</u><br><br>';
	echo 'Input Bits (Helln): 0100100001100101011011000110110001101110<br>';
	echo 'Output Bits: '. $output[2]. '<br><br>';

	echo '<u>Comparison in a better view</u><br><br>';
	echo 'Input Bits (Hello): 0100100001100101011011000110110001101111<br>';
	echo 'Input Bits (Helln): 0100100001100101011011000110110001101110<br><br>';
	echo 'Output Bits (Hello): '. '<span class="digests">'.$output[1].'</span>'. '<br>';
	echo 'Output Bits (Helln): '. '<span class="digests">'.$output[2].'</span>'. '<br><br>';


	echo 'Flipping a single bit on the input word "Hello" causes <b>'. $output[3]. '%</b> changes in output bits.';
	?>

	<br><br><hr><br>

	<div class="subHeader" style="font-size:125%">
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

	echo '<u>Comparison in a better view</u><br><br>';
	echo 'Input Bits (Computer): 0100001101101111011011010111000001110101011101000110010101110010<br>';
	echo 'Input Bits (Computes): 0100001101101111011011010111000001110101011101000110010101110011<br><br>';
	echo 'Output Bits (Computer): '. '<span class="digests">'.$output[4].'</span>'. '<br>';
	echo 'Output Bits (Computes): '. '<span class="digests">'.$output[5].'</span>'. '<br><br>';


	echo 'Flipping a single bit on the input word "Computer" causes <b>'. $output[6]. '%</b> changes in output bits.';
	?>

	<br><br><hr><br>

	<div class="subHeader" style="font-size:125%">
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

	echo '<u>Comparison in a better view</u><br><br>';
	echo 'Input Bits (Science): 01010011011000110110100101100101011011100110001101100101<br>';
	echo 'Input Bits (Sciencd): 01010011011000110110100101100101011011100110001101100100<br><br>';
	echo 'Output Bits (Science): '. '<span class="digests">'.$output[7].'</span>'. '<br>';
	echo 'Output Bits (Sciencd): '. '<span class="digests">'.$output[8].'</span>'. '<br><br>';


	echo 'Flipping a single bit on the input word "Science" causes <b>'. $output[9]. '%</b> changes in output bits.';
	?>

</div>