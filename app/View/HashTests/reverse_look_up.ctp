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

		</div>

		<?php

			$reverse_lookup_next = array(
				'class' => 'btn btn-primary pull-right',
				'label' => 'Next'
			);

			echo $this->Form->end($reverse_lookup_next)
		
		?>

	</div>

</div>
<script>

		$(document).ready(function() {

			var algorithmName = $('#HashTestsHashAlgorithmName').val();
			var maxCharacters = determineMaxCharacters(algorithmName);
			$('#word_count').text(maxCharacters + ' characters left');

			$('#HashTestsMessageDigest').keyup(function () {
				var algorithmName = $('#HashTestsHashAlgorithmName').val();
				var maxCharacters = determineMaxCharacters(algorithmName);
				var len = $(this).val().length;
				if (len >= maxCharacters) {
				$('#word_count').text(' you have reached the limit');
				$('#word_count').css('color', 'red');
				} else {
				var char = maxCharacters - len;
				$('#word_count').text(char + ' characters left');
				$('#word_count').css('color', 'black');
				
				}
			});


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

			$('#HashTestsHashAlgorithmName').change(function() {
				var algorithmName = $(this).val();
				var maxCharacters = determineMaxCharacters(algorithmName);
				var len = $('#HashTestsMessageDigest').val().length;
				if (len >= maxCharacters) {
					$('#word_count').text(' you have reached the limit');
					$('#word_count').css('color', 'red');
				} else {
					var char = maxCharacters - len;
					$('#word_count').text(char + ' characters left');
					$('#word_count').css('color', 'black');
				}
			}); 

		});



</script>
