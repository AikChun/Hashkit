<div class="container">
			
	<div class="jumbotron">

		<?php echo $this->Form->create('Questionnaires',array('action' => 'questionnaire', 'onsubmit'=> 'return validateForm()'));?>

		<div class="modal-header">

			<h2>Questionnaire</h2>

		</div>

		<br/>

		<div class="form-group">

			<?php
				$num = 1;
				for($i = 0; $i < sizeof($questions); $i++){
					echo '<b>'.$num++.'. '.$questions[$i].'</b><br><br>';
					echo '<input type="radio" name= "'.$i.'" value="a" /> a<br>'; 
					echo '<input type="radio" name= "'.$i.'" value="b" /> b<br>';
					echo '<input type="radio" name= "'.$i.'" value="c" /> c<br><br>';
				}
			?>

		</div>

		<div class="modal-footer">

				<div class="col-lg-12">

					<?php

						$options = array(
							'class' => 'btn btn-primary pull-right',
							'label' => 'Submit'
						);

					?>

				</div>

		</div>

		<?php echo $this->Form->End($options); ?>

	</div>

</div>

<script type="text/javascript">
	function validateForm() {

		var radio0 = document.getElementsByName("0");
	    var radio1 = document.getElementsByName("1");
	    var radio2 = document.getElementsByName("2");
	    var radios = [radio0, radio1, radio2];

	    var notAnswered = new Array();
	    var rowValid = false;
	    var formValid = true;


	    for(var i = 0; i < 3; i++){
	    	for (var j = 0; j < radios[i].length; j++){
	    		if (radios[i][j].checked) rowValid = true;
	    	}
	    	if(!rowValid){
	    		formValid = rowValid;
	    		notAnswered.push(i);
	    	}
	    	rowValid = false;
	    }

	    if (!formValid){
	    	var notAnsweredString = "question ";

			for(var i = 0; i < notAnswered.length; i++){
		    	notAnsweredString = notAnsweredString.concat(++notAnswered[i]);
		    	notAnsweredString = notAnsweredString.concat(" ");
		    }
		    
		    alert("Please answer " + notAnsweredString);
		}
	    return formValid;	
	}


</script>