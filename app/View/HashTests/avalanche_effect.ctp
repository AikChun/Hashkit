<div class="container">
			
	<div class="jumbotron">

		<?php echo $this->Form->create('HashTests',array('action' => 'avalanche_effect'));?>

		<div class="modal-header">

			<h2>Avalanche Effect</h2>

		</div>

		<br/>

		<div class="form-group">

			<?php

				echo 'In cryptography, the avalanche effect refers to a desirable property of cryptographic algorithms, typically block ciphers and cryptographic hash functions. The avalanche effect is evident if, when an input is changed slightly (for example, flipping a single bit) the output changes significantly (e.g., half the output bits flip). In the case of high-quality block ciphers, such a small change in either the key or the plaintext should cause a drastic change in the ciphertext.<br><br><br>';
				echo 'Please choose one of the hash algorithm below for an example.<br><br>';

				$algorithms = array();	

				foreach($result as $key => $model) {
					$entry = array(
						$model['HashAlgorithmV1']['name'] => $model['HashAlgorithmV1']['name']
					);
					$algorithms = array_merge($algorithms, $entry);
				}

				echo $this->Form->input('HashAlgorithm', array(
					'empty' => '(choose one)',
					'options'=> $algorithms
					)
				);

			?>

		</div>

		<div class="modal-footer">

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