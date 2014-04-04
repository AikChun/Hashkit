<div class="hashTests view">
	<?php echo $this->Form->create('HashTests');?>
	<?php 
		$algorithms = array();
		foreach($data as $key => $model ) : 
			$id = $model['HashAlgorithm']['id'];
			$algorithms[$id] = $model['HashAlgorithm']['name'];
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
	<?php echo $this->Form->end(__('Next')); ?>
</div>
