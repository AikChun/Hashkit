<div class="hashAlgorithms view">
<?php
	echo 'Plaintext entered: '. $output[0]['HashResult']['plaintext']. '<br><br>';
?>
<?php foreach($output as $key => $data): ?>
	Selected Algorithm: <?php echo $data['HashResult']['hash_algorithm_name'];?> <br>
	Digest: <?php echo $data['HashResult']['message_digest'];?>
	<br><br>
<?php endforeach;?>	
</div>
