<div class="hashAlgorithms view">
	<?php echo $this->Form->create('HashAlgorithm', array('action' => 'view'));?>
	<?php 
		$algorithms = array();
		foreach($data as $key => $model ) : 
			$name = $model['HashAlgorithm']['name'];
			$algorithms[$name] = $name;
		endforeach;
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
