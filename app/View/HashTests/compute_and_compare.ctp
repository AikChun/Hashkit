<div class="hashTests view">
	<?php echo $this->Form->create('HashTests');?>
	<?php 
		$email = array('');
		echo $this->Form->input('HashAlgorithm', array(
			'type'=>'select',
			'multiple'=>'checkbox',
			'label'=> false,
			'class'=>'listOfCheckBox',
			'options'=> array('Algorithms'=> $data)
			)
		);

	?>
	<?php echo $this->Form->end(__('Next')); ?>
</div>
