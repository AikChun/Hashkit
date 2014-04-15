<div class="hashTests view">

	<?php echo $this->Form->create('HashTests',array('action' => 'calculate_probability_of_collision'));?>

	<div class="or" style="font-size:200%">The Probability of obtaining a single collision for any hash function</div>
	<div class="or" style="font-size:150%">please enter the base and expontial of the number of hashes which will be tested for the hash function</div>

	<?php
		echo $this->Form->input('required_base', array(
			'type' => 'text',
			'rule'    => 'numeric',
			'message' => 'Only numbers allowed',
			'div' => false,
			'label' => 'Please enter the base:'
			
		));

		echo $this->Form->input('required_exponent', array(
			'type' => 'text',
			'rule'    => 'numeric',
			'message' => 'Only numbers allowed',
			'div' => false,
			'label' => 'Please enter the exponent:'
			
		));
	?>
	<div class="or" style="font-size:150%">OR</div>
	<?php
		echo $this->Form->input('hash_value', array(
			'type' => 'text',
			'rule'    => 'numeric',
			'message' => 'Only numbers allowed',
			'div' => false,
			'label' => 'Please enter the value of the hash:'
			
		));
	?>

	<div class="or" style="font-size:200%">THEN</div>

	<div class="or" style="font-size:150%">please enter the base and expontial of the total number of hashes for the hash function</div>
	
	<?php	
		echo $this->Form->input('customized_algorithm_base', array(
			'type' => 'text',
			'rule'    => 'numeric',
			'message' => 'Only numbers allowed',
			'div' => false,
			'label' => 'Please enter the base:'
			
		));

		echo $this->Form->input('customized_algorithm_exponent', array(
			'type' => 'text',
			'rule'    => 'numeric',
			'message' => 'Only numbers allowed',
			'div' => false,
			'label' => 'Please enter the exponent:'
			
		));
	?>

	<?php echo $this->Form->end(__('Submit')); ?>
</div>
