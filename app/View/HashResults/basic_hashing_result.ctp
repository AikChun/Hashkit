<div class="hashAlgorithms view">
<?php
if(!empty($output)) :

	echo 'Plaintext entered: '. $output[0]['HashResult']['plaintext']. '<br><br>';
foreach($output as $key => $data): ?>
	Selected Algorithm: <?php echo $data['HashResult']['hash_algorithm_name'];?> <br>
	Digest: <?php echo $data['HashResult']['message_digest'];?>
	<br><br>
<?php endforeach;
endif;
if(empty($output)) :
	
?>
Please select and choose your choice of algorithm.
<?php
	endif;
?>
</div>
