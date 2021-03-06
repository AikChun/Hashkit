<script type="text/javascript">

	function checkform() {
			
		var x = document.getElementById('required_base').value;
		var y = document.getElementById('required_exponent').value;
		var r = document.getElementById('hash_value').value;
		if (y != 0 || x != 0){
			if (isNaN(y) || isNaN(x) || x > 5 || x > 99999 ){
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
		}else if (r != 0){
			if(isNaN(r)){
				$('.bs-example-modal-lg').modal('show')
				var hash_valueNew = $('#hash_value');
				hash_valueNew.val('');
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
		var h = document.getElementById('hash_value1').value;

		if(a != 0 && b != 0){

			if (isNaN(a) || isNaN(b) || a > 5 || b > 99999){
					
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
		}else if (h != 0 ){
			if(isNaN(h)){
				$('.bs-example-modal-lg').modal('show')
				var hash_valueChange = $('#hash_value1');
				hash_valueChange.val('');
			}
		}

	}

	function checkformforHashValue() {

		var h = document.getElementById('hash_value1').value;

		if (isNaN(h)){
			
			$('.bs-1-modal-lg').modal('show')
			var hash_value1 = $('#hash_value1');
			hash_value1.val('');

		}
	}

</script>

<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Hash Collision Probability Calculator</h2>

		</div>

		<br/>

		<p>
		For any information on birthday attacks, refer to this link
		<br>
		To accomplish this, follow the steps below :
		</p>

		<?php
			echo $this->Form->create('HashTests',array('action' => 'calculate_probability_of_collision', 'class' => 'form-horizontal'));
		?>

		<h4>1. Sample size of the hash function </h4>
		<h5>Either enter the base/exponent or the sample size of the complexity of the hash function</h5>
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
						'onchange' => "checkform()",
						'placeholder' => 'base'
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
						'onchange' => "checkform()",
						'placeholder' =>'exponent(in terms of bits)'
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
						'onchange' => 'checkform()',
						'placeholder' =>'hash value (optional)'
					));
				
				?>

			</div>

		</div>

		<br>

		<h4>2.Select Hash algorithm </h4>

		<div class="form-group">

			<label class="col-lg-2 control-label">Hash Algorithm:</label>

			<div class="col-lg-2">

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
						'class' => 'form-control',
						'options'=> $algorithms,
						'id' => 'HashAlgorithm',
						'onchange' => 'checkform1()',
						'label' => false
						)
					);

				?>

			</div>

		</div> <!--form-group of select hash algorithm -->	

		<div class="form-group">
		
			<div id="customizedoptions" style="display: none">
						
				<div class="form-group">
					<h4>3. Total size of Hash Functions</h4>
					<h5>  Either enter the base/exponent or the total size of hashes for the algorithm</h5>				
					<label class="col-lg-2 control-label">Base:</label>

					<div class="col-lg-10">
						<?php

							echo $this->Form->input('customized_algorithm_base', array(
								'type' => 'text',
								'div' => false,
								'label' => false,
								'id' => 'customized_algorithm_base',
								'onchange' => 'checkform2()',
								'placeholder' =>'algorithm base'
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
								'onchange' => 'checkform2()',
								'placeholder' =>'algorithm exponent(in terms of bits)'
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
								'id' => 'hash_value1',
								'onchange' => 'checkform2()',
								'placeholder' =>'hash value(optional)'
							));
								
						?>

					</div>

				</div>

			</div> <!--end of customizedoptions -->
		</div> <!-- formgroup -->

		<button style="display: none;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Small modal</button> 
		
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-lg">
			
				<div class="modal-content alert alert-danger">
					
					<CENTER>
						
						<h3>Invalid input. Enter numeric digits only.</h3>
					
					</CENTER>

				</div>

			</div>

		</div> <!--end of bs-example-modal-lg -->

	

		<div class="modal-footer">

			<?php

				$calculate_probability_of_collision_next = array(
					'class' => 'btn btn-primary pull-right',
					'label' => 'Next'
				);

				echo $this->Form->end($calculate_probability_of_collision_next);

			?>

		</div>    <!--end of modal footer -->

	</div>

</div>