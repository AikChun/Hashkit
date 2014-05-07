<div class="container">
			
	<div class="jumbotron">

		<?php echo $this->Form->create('Questionnaires',array('action' => 'questionnaire'));?>

		<div class="modal-header">

			<h2>Questionnaire</h2>

		</div>

		<br/>

		<div class="form-group">

			<?php
				$num = 1;
				for($i = 0; $i < sizeof($questions); $i++){
					echo '<b>'.$num++.'. '.$questions[$i].'</b><br><br>';
					echo '<input type="radio" name= "'.$i.'" value="a" class="'.$i.'question" /> a<br>'; 
					echo '<input type="radio" name= "'.$i.'" value="b" class="'.$i.'question"/> b<br>';
					echo '<input type="radio" name= "'.$i.'" value="c" class="'.$i.'question"/> c<br><br>';
				}
			?>

		</div>

		<div class="modal-footer">

				<div class="col-lg-12">

					<?php

						$options = array(
							'class' => 'btn btn-primary pull-right',
							'label' => 'Submit',
							'onclick' => 'validateForm()'
						);

					?>

				</div>

		</div>

		<?php echo $this->Form->end($options); ?>

	</div>

</div>

<script type="text/javascript">
	function validateForm() {
	    // var radio0 = document.getElementsByName("0");
	    // var radio1 = document.getElementsByName("1");
	    // var radio2 = document.getElementsByName("2");
	    // alert("IN");

		var radio0 = document.getElementsByName("0");
	    var radio1 = document.getElementsByName("1");
	    var radio2 = document.getElementsByName("2");

	    var radios = [radio0, radio1, radio2];

	    var formValid = false;


	    var i = 0;

	    for(var i = 0; i < 3; i++){
	    	for (var j = 0; j < radios[i][j].length; j++){
	    		if (radios[i][j].checked) formValid = true;
	    	}
	    }

	    // while (!formValid && i < 3) {
	    //     if (radio0[i].checked) formValid = true;
	    //     i++;        
	    // }

	    if (!formValid) alert("Must check some option!");
	    return formValid;
	}​

</script>