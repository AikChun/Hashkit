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
	<div class="email" style="float:right">
		<input type="checkbox" name="data[HashTests][email]" value="1" id="email_checkbox"/> Send email notification when results are done.
	</div>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
