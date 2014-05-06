<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Avalanche Effect</h2>

		</div>

		<br/>

		<?php
			echo $this->Form->create('HashTests',array('action' => 'avalanche_effect', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">

			<div class="col-lg-12">
			
				<?php

					echo 'In cryptography, the avalanche effect refers to a desirable property of cryptographic algorithms, typically block ciphers and cryptographic hash functions. The avalanche effect is evident if, when an input is changed slightly (for example, flipping a single bit) the output changes significantly (e.g., half the output bits flip). In the case of high-quality block ciphers, such a small change in either the key or the plaintext should cause a drastic change in the ciphertext.';
					echo '<br/>';
					echo '<br/>';

				?>

			</div>

		</div>

		<div class="form-group">

			<div class="col-lg-12">

				<?php

					echo 'Please choose one of the hash algorithm below for an example.<br>';
					echo '<br/>';
				
				?>

			</div>

			<label class="col-lg-2 control-label">Hash Algorithm:</label>

			<div class="col-lg-2">

				<?php
			
					$algorithms = array();	

					foreach($result as $key => $model) {

						$entry = array($model['HashAlgorithmV1']['name'] => $model['HashAlgorithmV1']['name']);
						$algorithms = array_merge($algorithms, $entry);

					}

					echo $this->Form->input('HashAlgorithm', array(
							'empty' => '(choose one)',
							'class' => 'form-control',
							'options'=> $algorithms,
							'label' => false
							)
						);

				?>

			</div>

		</div>

		<div class="modal-footer">

		</div>

		<?php

			$options = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Next'
			);
			
			echo $this->Form->end($options);

		?>

	</div>

</div>