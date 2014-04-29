<!-- <div class="hashTests view"> -->

<script type="text/javascript">

	function checkform() {
			
		var x = document.getElementById('required_base').value;
		var y = document.getElementById('required_exponent').value;

		if (x == "" || isNaN(x)){
			 //alert("invalid input");
			$('.bs-example-modal-lg').modal('show')
			var required_base = $('#required_base');
			required_base.val('');
			var required_exponent = $('#required_exponent');
			required_exponent.val('');
 		}else{
 			if (x > 0 && y > 0){
				document.getElementById('hash_value').disabled = true;
			}else{
				document.getElementById('hash_value').disabled = false;
			}	
 		}	
 	}

 	function checkform1() {
 		var selected = document.getElementById('HashAlgorithm').value;
		if(selected == 'CUSTOMISED') {
			document.getElementById('customizedoptions').style.display = 'block';
		}else {
			document.getElementById('customizedoptions').style.display = 'none';
		}
 	}

 	function checkform2() {
 		var a = document.getElementById('customized_algorithm_base').value;
		var b = document.getElementById('customized_algorithm_exponent').value;
		if (isNaN(a) || isNaN(b)){
 				//alert("invalid input");
 				$('.bs-example-modal-sm').modal('show')
 		}else{
			if (a > 0 || b > 0){
				document.getElementById('hash_value1').disabled = true;
			}else{
				document.getElementById('hash_value1').disabled = false;
			}	
 		}
 	}

</script>

<div class="container">
	<?php echo $this->Form->create('HashTests',array('action' => 'calculate_probability_of_collision'));?> 

	<div class = "jumbotron">
	<center><h2>Hash Collision Probability (Using Birthday Paradox)</h2>
	<p>A method to calcuate the likeliness of a occurence of collisions when the hash function generates multiple message digests.</p></center>
	</div>
 	
 	<p>Based on the birthday paradox which in theory can calculate the probability that, in a set of n randomly chosen people, some pair of them will have the same birthday, this method uses a probabilistic model to reduce the complexity of cracking a hash function.	
 	</p>
 	<br>
 	<img src="/img/part1.jpg" />
 	<br>
 	<img src="/img/part2 .jpg" />
 	<br>
 	<p> By using the above mathematical expression, we can help you to do the math for the probability of getting a collision and the required amount of hashes before getting a 99% probability.
 	</p>

	<p>please enter the base and expontial of the number of hashes which will be tested for the hash function</p>
	
	<fieldset>
			<?php
			echo $this->Form->input('required_base', array(
				'type' => 'text',
				'div' => false,
				'label' => 'Base:',
				'size' => 10,
				'id' => 'required_base',
				'onchange' => "checkform()"
				));
			?>
		<br>	
		
			<?php	
				echo $this->Form->input('required_exponent', array(
					'type' => 'text',
					'div' => false,
					'label' => 'Exponent :',
					'size' => 10,
					'id' => 'required_exponent',
					'onchange' => "checkform()"
				));
			?>

		<br>
		
			<?php
				echo $this->Form->input('hash_value', array(
					'type' => 'text',
					'div' => false,
					'label' => 'Number of hashes :',
					'size' => 30,
					'id' => 'hash_value'
				));
			?>
	</fieldset>
	

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
			'id' => 'HashAlgorithm',
			'onchange' => 'checkform1()'
			)
		);

	?>
	
	<div id="customizedoptions" style="display: none">
	<fieldset>
	<div style="font-size =100%">Enter the base and expontial or just the total number of hashes for the hash function </div>
	
	<?php	
		echo $this->Form->input('customized_algorithm_base', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Base:',
			'id' => 'customized_algorithm_base',
			'onchange' => 'checkform2()'
		));
	?>
	<br>
	<?php	
		echo $this->Form->input('customized_algorithm_exponent', array(
			'type' => 'text',
			'div' => false,
			'label' => 'Exponent:',
			'id' => 'customized_algorithm_exponent',
			'onchange' => 'checkform2()'
		));
	?>
	<br>
	<?php
		echo $this->Form->input('hash_value1', array(
			'type' => 'text',
			'div' => false,
			'label' => 'total amount of the hashes:',
			'id' => 'hash_value1'
		));
	?>
	</div>
	</fieldset>


	<div id="submitbutton">
		<?php echo $this->Form->submit('submitbutton1.jpg'); ?>
	</div>	

	 <button style="display: none;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> 
	
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content alert alert-danger">
				      <CENTER><h3> Invalid input. Enter numeric digits only.</h3></CENTER>
				    </div>
				  </div>
	</div>

</div>
