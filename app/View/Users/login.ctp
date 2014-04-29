<?php

	// define variables and set to empty values
	$email = $password = "";
	$emailErr = $passwordErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	   if (empty($_POST["email"])) {
	    	$emailErr = "Email is required";
	   } else {
	    	$email = test_input($_POST["email"]);
		    // check if e-mail address syntax is valid
		    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
		    	$emailErr = "Invalid email format";
		    }
		}

	   if (empty($_POST["password"])) {
	    	$passwordErr = "Password is required";
	   } else {
	    	$password = test_input($_POST["password"]);
	   }

	}
	     
	function test_input($data) {

	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;

	}

?>

<div class="container">
			
	<div class="jumbotron">

		<?php

		echo $this->Form->create('User', array('action' => 'login'));

		?>
		
		<fieldset>

			<legend><?php echo __('Login'); ?></legend>

			<?php

				echo $this->Form->input('email');
				echo $this->Form->input('password');
				echo $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forget_password'));

			?>

		</fieldset>

		<?php
			echo $this->Form->end('Login');
		?>

		<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<div class="modal-header">

				<h4>Login</h4>

			</div>
			
			<br/>

			<div class="form-group">
								
				<label for="login-email" class="col-lg-2 control-label">Email:</label>

				<div class="col-lg-10">

					<input type="text" class="form-control" id="login-email" placeholder="you@exampe.com" value="<?php echo $email;?>">
					<span class="error">* <?php echo $emailErr;?></span>

				</div>

			</div>

			<div class="form-group">

				<label for="login-password" class="col-lg-2 control-label">Password:</label>

				<div class="col-lg-10">

					<input type="text" class="form-control" id="login-password" placeholder="Password" value="<?php echo $password;?>">
					<span class="error">* <?php echo $passwordErr;?></span>

				</div>

			</div>

			<div class="form-group">

				<div class="col-lg-12">

					<a href="/Users/forget_password" class="pull-right">Forgot your password?</a>
					<br/>
					<br/>
					<button class="btn btn-primary pull-right" name="submit" type="submit">Login</button>

				</div>

			</div>

		</form>

		<?php

			echo "<h2>Your Input:</h2>";
			echo $password;
			echo "<br>";
			echo $email;
			echo "<br>";

		?>

	</div>

</div>