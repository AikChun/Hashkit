
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
					'id' => 'hash_value',
					'onchange' => 'checkformforHashValue()'
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
 
 	<?php echo $this->Form->button('Submit', 
 		array(
 			'type' => 'submit',
 			'class'=> 'btn btn-primary pull-left',
 			'onclick'=> 'submitbutton()'
 			)); 
 	?>
	
	<button style="display: none;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Small modal</button> 
	
	<button style="display: none;" class="btn btn-primary" data-toggle="modal" data-target=".bs-1-modal-lg">Small modal</button> 
	
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content alert alert-danger">
				      <CENTER><h3> Invalid input. Enter numeric digits only.</h3></CENTER>
				    </div>
				  </div>
	</div>

	<div class="modal fade bs-1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content alert alert-danger">
				      <CENTER><h3> Fill in all required empty fields.</h3></CENTER>
				    </div>
				  </div>
	</div>

</div>

<script type="text/javascript">

	function checkform() {
			
		var x = document.getElementById('required_base').value;
		var y = document.getElementById('required_exponent').value;

		if (isNaN(y) || isNaN(x) || x > 5 ){

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

	function checkformforHashValue() {

		var r = document.getElementById('hash_value').value;

		if (isNaN(r)){

			$('.bs-example-modal-lg').modal('show')
			var hash_value = $('#hash_value');
			hash_value.val('');

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

		if (isNaN(a) || isNaN(b) || a > 5){
				
				$('.bs-example-modal-lg').modal('show')
				var required_base = $('#customized_algorithm_base');
				required_base.val('');
				var required_exponent = $('#customized_algorithm_exponent');
				required_exponent.val('');

		}else{

			if (a > 0 || b > 0){
				document.getElementById('hash_value1').disabled = true;
			}else{
				document.getElementById('hash_value1').disabled = false;
			}	
		}
	}

	function checkformforHashValue() {

		var h = document.getElementById('hash_value1').value;

		if (isNaN(h)){
			
			$('.bs-example-modal-lg').modal('show')
			var hash_value1 = $('#hash_value1');
			hash_value1.val('');

		}
	}

	function submitbutton() {

		var c = document.getElementById('required_base').value;
		var d = document.getElementById('required_exponent').value;
		var e = document.getElementById('hash_value').value;
		var f = document.getElementById('HashAlgorithm').value;

		if(c == "" && d = ""){
			if(e == ""){
				$('.bs-1-modal-lg').modal('show')
			}
		}else if(c != "" && d != ""){
			if(e != ""){
				$('.bs-1-modal-lg').modal('show')
			}
		}else if(c != "" || d != ""){
			if(e != ""){
				$('.bs-1-modal-lg').modal('show')
			}
		}else if(e != ""){
			if(c != "" || d != ""){
				$('.bs-1-modal-lg').modal('show')
			}
		}
	}

</script>

<div class="container">
			
	<div class="jumbotron">

		<?php
			
			echo $this->Form->create('HashTests',array('action' => 'calculate_probability_of_collision', 'class' => 'form-horizontal'));

		?> 

		<div class="modal-header">

			<h2>Hash Collision Probability</h2>

		</div>

		<br/>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Base:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('required_base', array(
						'type' => 'text',
						'div' => false,
						'label' => false,
						'size' => 10,
						'id' => 'required_base',
						'onchange' => "checkform()"
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Exponent:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('required_exponent', array(
						'type' => 'text',
						'div' => false,
						'label' => false,
						'size' => 10,
						'id' => 'required_exponent',
						'onchange' => "checkform()"
					));

				?>

			</div>

		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Number of Hashes:</label>

			<div class="col-lg-10">

				<?php

					echo $this->Form->input('hash_value', array(
						'type' => 'text',
						'div' => false,
						'label' => false,
						'size' => 30,
						'id' => 'hash_value',
						'onchange' => 'checkformforHashValue()'
					));
				
				?>

			</div>

		</div>

		<div class="form-group">

			<label class="col-lg-2 control-label">Hash Algorithm:</label>

			<div class="col-lg-2">

				<select class="form-control" name="data[HashAlgorithmV1][name]">
					<option value="">(choose one)</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>

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
						'onchange' => 'checkform1()',
						'label' => false
						)
					);

			?>

			</div>

		</div>

		<div class="form-group">
		
			<div id="customizedoptions" style="display: none">

				<div style="font-size =100%">Enter the base and expontial or just the total number of hashes for the hash function </div>
				
				<div class="form-group">
										
					<label class="col-lg-2 control-label">Base:</label>

					<div class="col-lg-10">

						<?php

							echo $this->Form->input('customized_algorithm_base', array(
								'type' => 'text',
								'div' => false,
								'label' => false,
								'id' => 'customized_algorithm_base',
								'onchange' => 'checkform2()'
							));

						?>

					</div>

				</div>

				<div class="form-group">
										
					<label class="col-lg-2 control-label">Exponent:</label>

					<div class="col-lg-10">

						<?php

							echo $this->Form->input('customized_algorithm_exponent', array(
								'type' => 'text',
								'div' => false,
								'label' => false,
								'id' => 'customized_algorithm_exponent',
								'onchange' => 'checkform2()'
							));

						?>

					</div>

				</div>

				<div class="form-group">
										
					<label class="col-lg-2 control-label">Number of Hashes:</label>

					<div class="col-lg-10">

						<?php

							echo $this->Form->input('hash_value1', array(
								'type' => 'text',
								'div' => false,
								'label' => false,
								'id' => 'hash_value1'
							));
								
						?>

					</div>

				</div>

			</div>

			<button style="display: none;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Small modal</button> 
		
			<button style="display: none;" class="btn btn-primary" data-toggle="modal" data-target=".bs-1-modal-lg">Small modal</button> 
			
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

				<div class="modal-dialog modal-lg">
				
					<div class="modal-content alert alert-danger">
						
						<CENTER>
							
							<h3>Invalid input. Enter numeric digits only.</h3>
						
						</CENTER>

					</div>

				</div>

			</div>

			<div class="modal fade bs-1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

				<div class="modal-dialog modal-lg">

					<div class="modal-content alert alert-danger">

						<CENTER>

							<h3>Fill in all required empty fields.</h3>

						</CENTER>

					</div>
			
				</div>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<?php

					$options = array(
						'class' => 'btn btn-primary pull-right',
						'label' => 'Next'
					);

				?>

			</div>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>

</div>
