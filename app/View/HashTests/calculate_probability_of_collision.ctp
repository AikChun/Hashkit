<!-- <div class="hashTests view"> -->
<div class="container">
	<?php echo $this->Form->create('HashTests',array('action' => 'calculate_probability_of_collision'));?>

	<div class = "jumbotron">
	<center><h2>Hash Collision Probability (Using Birthday Paradox)</h2>
	<p>A method to calcuate the likeliness of a occurence of collisions when the hash function is generating multiple message digests.</p></center>
	</div>
 	
 	
	<p>please enter the base and expontial of the number of hashes which will be tested for the hash function</p>
	<?php
		echo $this->Form->input('required_base', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Base :'
			
		));
	?>
	<br>	
	<?php	
		echo $this->Form->input('required_exponent', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Exponent :'
			
		));
	?>

	<div style="font-size:100%">OR</div>
	<?php
		echo $this->Form->input('hash_value', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Number of hashes :'
			
		));
	?>

	<div style="font-size:200%">THEN</div>

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

		public function CheckForAlgorithm() {
    		if (document.getElementById('customised').checked) {
        		//document.getElementById('ifYes').style.visibility = 'visible';
        		<?php echo "true" ?>
    	} else {
       			//document.getElementById('ifYes').style.visibility = 'hidden';
    	}

	</script>

	<div style="font-size:150%">please enter the base and expontial of the total number of hashes for the hash function</div>
	
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

	<div style="font-size:150%">OR</div>
	<?php
		echo $this->Form->input('hash_value1', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Enter the total number of the hashes which the hash function can generate:'
			
		));
	?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
