<div class="container">
			
	<div class="jumbotron">

		<div class="modal-header">

			<h2>Reverse Look-up</h2>

		</div>
			
		<br/>

		<?php
			echo $this->Form->create('HashTests', array('action' => 'reverse_look_up', 'class' => 'form-horizontal'));
		?>

		<div class="form-group">

			<label class="col-lg-2 control-label">Message Digest:</label>

			<div class="col-lg-10">

			<?php

				echo $this->Form->input('message_digest', array(
					'class' => 'form-control',
					'placeholder' => 'Message Digest',
					'label' => false,
					'required'));
				
			?>

			</div>

			<div id="word_count" style="text-align:right;padding-right:20px"></div>
		
		</div>

		<div class="form-group">
								
			<label class="col-lg-2 control-label">Hash Algorithms:</label>

			<div class="col-lg-2">

				<?php

					echo $this->Form->input('hash_algorithm_name', array(
						'class' => 'form-control',
						'options'=> $data,
						'label' => false,
						)
					);

				?>

			</div>

		</div>

		<div class="modal-footer">

			<?php

				$reverse_lookup_next = array(
					'class' => 'btn btn-primary pull-right',
					'label' => 'Next'
				);

				echo $this->Form->end($reverse_lookup_next)
		
			?>

		</div>

	</div>

</div>
<script>

		$(document).ready(function() {

			// perform this when web page is loaded.

			var algorithmName = $('#HashTestsHashAlgorithmName').val();
			var maxCharacters = determineMaxCharacters(algorithmName);
			$('#word_count').text(maxCharacters + ' characters left');

			// This updates #word_count upon keypresses in the text box
			$('#HashTestsMessageDigest').keyup(function () {
				var whatsleft = determineLeftOverCharacterCount();
				var maxCharacters = determineMaxCharacters(algorithmName);

				if (whatsleft === false) {
					$('#word_count').text('You need to enter ' + maxCharacters + ' for the algorithm you\'ve chosen.');
					$('#word_count').css('color', 'red');
				} else {
					$('#word_count').text(whatsleft + ' characters left');
					$('#word_count').css('color', 'black');
				
				}
			});

			// Updates #word_count when select box changes
			$('#HashTestsHashAlgorithmName').change(function() {
				var whatsleft = determineLeftOverCharacterCount();
				var algorithmName = $('#HashTestsHashAlgorithmName').val();
				var maxCharacters = determineMaxCharacters(algorithmName);
				if (whatsleft === false) {
					$('#word_count').text('You need to enter ' + maxCharacters + ' for the algorithm you\'ve chosen.');
					$('#word_count').css('color', 'red');
				} else {
					$('#word_count').text(whatsleft + ' characters left');
					$('#word_count').css('color', 'black');
				}
			}); 

			// counts and prevents user from submitting form if the character count is over for the stipulated algorithm.
			$('#HashTestsReverseLookUpForm').submit(function() {
				var whatsleft = determineLeftOverCharacterCount();
				var algorithmName = $('#HashTestsHashAlgorithmName').val();
				var maxCharacters = determineMaxCharacters(algorithmName);
				if(whatsleft === false || whatsleft !== 0) {
					alert('Please enter a message digest of ' + maxCharacters + ' characters for your chosen algorithm.');
					event.preventDefault();
				}
				
			});

			// Find out what is the character amount you need for each algorithm
			function determineLeftOverCharacterCount() {
				var algorithmName = $('#HashTestsHashAlgorithmName').val();
				var maxCharacters = determineMaxCharacters(algorithmName);
				var len = $('#HashTestsMessageDigest').val().length;
				if(len > maxCharacters) {
					return false;
				}
				return maxCharacters - len;
			}

			// returns the max characters that is for each algorithm
			function determineMaxCharacters(algorithmName) {
				if(algorithmName == 'sha1') {
					return 40;
				} else if(algorithmName == 'md5') {
					return 32;
				} else if(algorithmName == 'md4') {
					return 32;
				} else if(algorithmName == 'md2') {
					return 32;
				} else if(algorithmName == 'sha256') {
					return 64;
				}
			}

		});



</script>
