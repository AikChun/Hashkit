<?php

/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'FYP: Hashkit');

?>

<!DOCTYPE html>
<html>

	<head>

		<title>Hashkit Project Home Page</title>

	  	<?php 
	  	
	  		echo $this->Html->script('jquery-2.1.0.js');
	  		echo $this->Html->script('bootstrap.js');

			echo $this->Html->meta(
    			'viewport',
    			'width=device-width, initial-scale=1.0'
			);

			echo $this->Html->css(array('bootstrap','styles'));
			echo $this->fetch('script');
			echo $this->fetch('meta');
			echo $this->fetch('css');

	  	?>

	</head>

	<body>
	<div class="navbar-wrapper">
		<div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
				<a href = "/pages/index" class = "navbar-brand">Hashkit</a>
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>

				</button>

				<div class="collapse navbar-collapse navHeaderCollapse">
					
					<ul class="nav navbar-nav navbar-left">
						
						<li class="active"><a href="/">Home</a></li>
						<li><a href="http://hashkitproject.blogspot.sg/">Blog</a></li>
						<?php if($authUser):?>
						<li class="dropdown">
								
							<a href="/" class="dropdown-toggle" data-toggle="dropdown">Hash Functions<b class="caret"></b></a>

								<ul class="dropdown-menu">
									<li><a href="/HashTests/basic_hashing">Hash generator</a></li>
									<li><a href="/HashTests/compute_and_compare">Hash alogrithm recommendation</a></li>
									<li><a href="/HashTests/hash_analyser">Message digest analyser</a></li>
									<li><a href="/HashTests/calculate_probability_of_collision">Collision proability calculator</a></li>
									<li><a href="/HashTests/birthday_attack">Collision generator</a></li>
									<li><a href="/HashTests/reverse_look_up">Reverse look-up</a></li>
									<li><a href="/HashTests/avalanche_effect">Avalanche effect</a></li>
								</ul>

						</li>
						<li><a href="/Pages/hash_function">Hash information</a></li>
						<?php endif;?>
						<li><a href="/Users/AboutUs">About Us</a></li>
						<li><a href="#contact" data-toggle="modal">Contact Us</a></li>

					</ul>

					<ul class = "nav navbar-nav navbar-right">

						<?php if($authUser):?>

						<li style="float:right;"><a href="/Users/Logout">Logout</a></li>
						<li><a href="/Users/view_my_own_profile"><?php echo $authUser['name'];?></a></li>
						
						<?php endif;?>
						
						<?php if(!$authUser):?>

						<li><a href="/Users/Login">Login</a></li>
						<li><a href="/Users/Register">Register</a></li> 

						
						<?php endif;?>

					</ul>

				</div>

			</div>

		</div>

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

		<div class="navbar navbar-default navbar-fixed-bottom">
			
			<div class="container">
				
				<p class="navbar-text pull-left">Site Built By FYP GROUP</p>

			</div>

		</div>

		<div class="modal fade" id="contact" role="dialog">
			
			<div class="modal-dialog">

				<div class="modal-content">

					<form class="form-horizontal">

						<div class="modal-header">

							<h4>Contact Us!</h4>

						</div>

						<div class="modal-body">
							
							<div class="form-group">
								
								<label for="contact-name" class="col-lg-2 control-label">Name:</label>

								<div class="col-lg-10">

									<input type="text" class="form-control" id="contact-name" placeholder="Full Name">

								</div>

							</div>

							<div class="form-group">

								<label for="contact-email" class="col-lg-2 control-label">Email:</label>

								<div class="col-lg-10">

									<input type="text" class="form-control" id="contact-email" placeholder="you@example.com">

								</div>

							</div>

							<div class="form-group">

								<label for="contact-message" class="col-lg-2 control-label">Message:</label>

								<div class="col-lg-10">

									<textarea class="form-control" rows="8"placeholder="Your message to us"></textarea>

								</div>

							</div>

						</div>

						<div class="modal-footer">

							<button class="btn btn-primary" type="submit">Send</button>
							<a class="btn btn-default" data-dismiss="modal">Close</a>

						</div>

					</form>

				</div>

			</div>
	</body>

</html>
