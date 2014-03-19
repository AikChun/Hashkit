<div class="hashprocesses view">
	<?php echo $this->Form->create('Hashprocess', array('action' => 'HashingPlaintext'));?>
	<?php 
		$algorithms = array();
		foreach($data as $key => $model ) : 
			$name = $model['Hashname']['name'];
			$algorithms[$name] = $name;
		endforeach;
		echo $this->Form->input('hashname', array(
			'type'=>'select',
			'multiple'=>'checkbox',
			'label'=> __(''),
			'class'=>'listOfCheckBox',
			'options'=> array('Algorithms'=> $algorithms)
			)
		);
	?>
	<?php echo $this->Form->end(__('Submit')); ?>

		
</div>
