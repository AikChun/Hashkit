<div class="hashResults form">
<?php
if(!empty($output)) :

	echo 'Your selected algorithm is '. $output[0]['HashTests']['HashAlgorithm']. '<br><br>';

	echo 'Hello: '. $output[1]. '<br>';
	echo 'Hellp: '. $output[2]. '<br><br>';
	echo 'Flipping a single bit on the word "Hello" causes '. $output[3]. '% changes in output bits.';

	?>
<?php
endif;
if(empty($output)) :
	
?>
Please select an algorithm.
<?php
	endif;
?>
</div>