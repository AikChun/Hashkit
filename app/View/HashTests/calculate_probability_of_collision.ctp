<div class="hashTests view">

	<?php echo $this->Form->create('HashTests',array('action' => 'calculate_probability_of_collision'));?>

	<div class="or" style="font-size:200%">The Probability of obtaining a single collision for any hash function</div>
	<div class="or" style="font-size:150%">please enter the base and expontial of the number of hashes which will be tested for the hash function</div>

	<?php
		echo $this->Form->input('required_base', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Enter the base of the amount of hashes which need to be tested with :'
			
		));


		echo $this->Form->input('required_exponent', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Enter the exponent of the amount of hashes which need to be tested with :'
			
		));
	?>

	<div class="or" style="font-size:150%">OR</div>
	<?php
		echo $this->Form->input('hash_value', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Enter the amount of the hashes which needs to be tested with :'
			
		));
	?>

	<div class="or" style="font-size:200%">THEN</div>

	<?php 
		$algorithms = array();	

        foreach($result as $key => $model) {
        	$entry = array(
        		$model['HashAlgorithmV1']['name'] => $model['HashAlgorithmV1']['name'],
        		);
        	$algorithms = array_merge($algorithms, $entry);
        }

        echo $this->Form->input('HashAlgorithm', array(
			'empty' => '(choose one)',
			'options'=> $algorithms,
			'onclick' => 'javascript:CheckForAlgorithm();'
			)
		);

	?>

	<script type="text/javascript">

		function CheckForAlgorithm() {
    		if (document.getElementById('customised').checked) {
        		//document.getElementById('ifYes').style.visibility = 'visible';
        		<?php echo "true" ?>
    	} else {
       			//document.getElementById('ifYes').style.visibility = 'hidden';
    	}

</script>

	<div class="or" style="font-size:150%">please enter the base and expontial of the total number of hashes for the hash function</div>
	
	<?php	
		echo $this->Form->input('customized_algorithm_base', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Please enter the base for the total number of the hashes which the hash function can generate:'
			
		));

		echo $this->Form->input('customized_algorithm_exponent', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Enter the exponent for the total number of the hashes which the hash function can generate:'
			
		));
	?>

	<div class="or" style="font-size:150%">OR</div>
	<?php
		echo $this->Form->input('hash_value1', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Enter the total number of the hashes which the hash function can generate:'
			
		));
	?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
