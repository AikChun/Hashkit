<div class="HashTests view">
	Avalanche effect Test
	<?php echo $this->Form->create('HashTests',array('action' => 'avalanche_effect'));?>
	
	<?php
		echo $this->Form->input('plaintext', array(
		'type' => 'text',
		'div' => false,
		'label' => 'Please enter your plaintext:'
	)); ?>

	<br>

	<?php 
		$algorithms = array();	

        foreach($result as $key => $model) {
        	$entry = array(
        		$model['HashAlgorithmV1']['name'] => $model['HashAlgorithmV1']['name'] 
        		);
            // $id = $model['HashAlgorithmV1']['id'];
            // $algorithms[$id] = $model['HashAlgorithmV1']['name'];
        	$algorithms = array_merge($algorithms, $entry);
        }
        // array('id' => 'algorithm');

        echo $this->Form->input('HashAlgorithm', array(
			'empty' => '(choose one)',
			'options'=> $algorithms
			)
		);

	?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
