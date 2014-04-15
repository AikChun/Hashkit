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
        foreach($result as $key => $jajabingx) {
            echo $jajabingx['HashAlgorithmV1']['id'];
            echo $jajabingx['HashAlgorithmV1']['name'];
        }
		// $algorithms = array();
		// foreach($data as $model ) : 
		// 	$id = $model['HashAlgorithmV1']['id'];
		// 	$algorithms[$id] = $model['HashAlgorithmV1']['name'];
		// endforeach;
		// echo $this->Form->input('HashAlgorithmV1', array(
		// 	'empty' => '(choose one)'
		// 	'options'=> array('Algorithms'=> $algorithms))
		// echo $this->Form->input('HashAlgorithm', array(
		// 	'empty' => '(choose one)',
		// 	'options'=> array('Algorithms'=> $algorithms)
		// 	)
		// );

	?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
