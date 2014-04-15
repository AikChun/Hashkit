<div class="hashTests view">
	Avalanche effect Test
	<?php echo $this->Form->create('HashTests',array('action' => 'avalanche_effect'));?>
	
	<?php
		echo $this->Form->input('plaintext', array(
		'type' => 'text',
		'div' => false,
		'label' => 'Please enter your plaintext:'
	)); ?>


	<?php 
		$algorithms = array();
		foreach($data as $model ) : 
			$id = $model['HashAlgorithmV1']['id'];
			$algorithms[$id] = $model['HashAlgorithmV1']['name'];
		endforeach;
<<<<<<< HEAD
		echo $this->Form->input('HashAlgorithmV1', array(
			'empty' => '(choose one)'
			'options'=> array('Algorithms'=> $algorithms))
=======
		echo $this->Form->input('HashAlgorithm', array(
			'empty' => '(choose one)',
			'options'=> array('Algorithms'=> $algorithms)
			)
>>>>>>> 009bd913572ebe81282e4332ef8b1da898790207
		);

	?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
