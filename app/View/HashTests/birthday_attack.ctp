<div class="HashTests view">
	Birthday Attack
	<?php echo $this->Form->create('HashTests',array('action' => 'birthday_attack'));?>
	
	<?php 
		$algorithms = array();	

        foreach($result1 as $key => $model) {
        	$entry = array(
        		$model['HashAlgorithmV1']['name'] => $model['HashAlgorithmV1']['name'] 
        		);
        	$algorithms = array_merge($algorithms, $entry);
        }
  
        echo $this->Form->input('HashAlgorithm', array(
			'empty' => '(choose one)',
			'options'=> $algorithms
			)
		);

	?>
	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
