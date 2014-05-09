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
					'onchange' => 'updateWordCount()',
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
			updateWordCount();
		});

		$('#word_count').keypress(function() {
			var algorithmName = $('#HashTestsHashAlgorithmName').val();
			var textInput = $('#HashTestsMessageDigest').text();
			var characterLength = textInput.length;
			alert(characterLength);
			var maxCharacters = 0;
			if (algorithmName == 'sha1') {
				maxCharacters = 40;
			} else if(algorithmName == 'md5') {
				maxCharacters = 32;

			} else if(algorithmName == 'md2') {
				maxCharacters = 32;

			} else if(algorithmName == 'md4') {
				maxCharacters = 32;

			} else if(algorithmName == 'sha256') {
				maxCharacters = 64;

			}

			var remainingCharacters = maxCharacters - characterLength;
			$('#word_count').html(remainingCharacters);
		});
		function updateWordCount() {
			var algorithmName = $('#HashTestsHashAlgorithmName').val();
			var textInput = $('#HashTestsMessageDigest').text();
			var characterLength = textInput.length;
			var maxCharacters = 0;
			if (algorithmName == 'sha1') {
				maxCharacters = 40;
			} else if(algorithmName == 'md5') {
				maxCharacters = 32;

			} else if(algorithmName == 'md2') {
				maxCharacters = 32;

			} else if(algorithmName == 'md4') {
				maxCharacters = 32;

			} else if(algorithmName == 'sha256') {
				maxCharacters = 64;

			}

			var remainingCharacters = maxCharacters - characterLength;
			$('#word_count').html(remainingCharacters);

		}
</script>
