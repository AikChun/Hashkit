<div class="hashTests view">
	<?php echo $this->Form->create('HashTests', array('action' => 'basicHashing'));?>
	<?php 
		$algorithms = array();
		foreach($data as $key => $model ) : 
			$name = $model['HashAlgorithm']['name'];
			$algorithms[$name] = $name;
		endforeach;
		$email = array('');
		echo $this->Form->input('HashAlgorithm', array(
			'type'=>'select',
			'multiple'=>'checkbox',
			'label'=> false,
			'class'=>'listOfCheckBox',
			'options'=> array('Algorithms'=> $algorithms)
			)
		);

	?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
