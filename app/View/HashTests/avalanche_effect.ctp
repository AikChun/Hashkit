<div class="hashTests view">
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
            $id = $model['HashAlgorithmV1']['id'];
            $algorithms = $model['HashAlgorithmV1']['name'];
        }

        echo $this->Form->input('HashAlgorithmV1', array(
			'empty' => '(choose one)',
			'options'=> array('HashAlgorithm' => $algorithms))
		);

	?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
