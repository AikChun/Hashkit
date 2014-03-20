<div class="hashAlgorithms view">
<?php
	echo 'Plaintext entered: '. $output['HashResult']['plaintext']. '<br><br>';
?>
<?php foreach($output['HashResult']['message_digest'] as $key => $message_digest): ?>
	Selected Algorithm: <?php echo $output['HashAlgorithm'][$key];?> <br>
	Digest: <?php echo $message_digest;?>
	<br><br>
<?php endforeach;?>	
<?php echo $this->Form->end(__('Save to text file')); ?>
</div>
