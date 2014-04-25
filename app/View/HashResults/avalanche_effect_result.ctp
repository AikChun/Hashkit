<div class="hashResults form">

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

</div>