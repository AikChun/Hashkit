<!DOCTYPE html>
<html>

	<head>

		<title>Hashkit</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<?php 
	  	
	  		echo $this->Html->script('jquery-2.1.0.js');
	  		echo $this->Html->script('bootstrap.js');

			echo $this->Html->css(array('bootstrap','styles','sidebar'));
			echo $this->fetch('script');
			echo $this->fetch('meta');
			echo $this->fetch('css');

	  	?>

	</head>

	<body>

		<div class = "navbar navbar-inverse navbar-fixed-top " id="nav">
			
			<div class = "container">

				<!-- <a href = "/" class = "navbar-brand">Hashkit</a> -->
				<a class="navbar-brand" href="/" id="iconforbrand"><img src="/img/hash_icon.png"></a>

				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">

					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>

				</button>

				<div class="collapse navbar-collapse navHeaderCollapse">
					
					<ul class="nav navbar-nav navbar-left">
						
						<li id="textfornavbar"><a href="/#myCarousel">Home</a></li>

						<?php  if($authUser['group_id'] == 1) { ?>

						<li id="textfornavbar" class="dropdown">
								
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Tools<b class="caret"></b></a>

								<ul class="dropdown-menu">

									<li><a href="/Users/">List Users</a></li>
									<li><a href="/Users/admin_add">Add Users</a></li>

								</ul>
						</li>

						<?php 

							}
							if($authUser) {

						?>

						<li id="textfornavbar" class="dropdown">
								
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Hash Functions<b class="caret"></b></a>

								<ul id="textfornavbar" class="dropdown-menu">

									<li><a href="/HashTests/basic_hashing">Hash Generator</a></li>
									<li><a href="/HashTests/compute_and_compare">Hash Algorithm Recommendation</a></li>
									<li><a href="/HashTests/hash_analyser">Message Digest Analyser</a></li>
									<li><a href="/HashTests/calculate_probability_of_collision">Collision Probability Calculator</a></li>
								<!-- 	<li><a href="/HashTests/birthday_attack">Collision Generator</a></li> -->
									<li><a href="/HashTests/reverse_look_up">Reverse Look-up</a></li>
									<li><a href="/HashTests/avalanche_effect">Avalanche Effect</a></li>

								</ul>

						</li>
						<li id="textfornavbar"><a href="/Pages/hash_information">Hash Information</a></li>
						<li id="textfornavbar"><a href="/Questionnaires/questionnaire_start">Questionnaire</a></li>
						
						<?php } ?>
						
						<li id="textfornavbar" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>

								<ul class="dropdown-menu">
									
									<li id="textfornavbar"><a href="/#section2">FAQ</a></li>
									<li id="textfornavbar"><a href="/#section3">Support</a></li>
									<li id="textfornavbar"><a href="/contact_us">Contact Us</a></li>
								</ul>
						</li>
						<li id="textfornavbar"><a href="/#section1">About Us</a></li>
					</ul>

					<ul id="textfornavbar" class = "nav navbar-nav navbar-right">

						<?php if($authUser) { ?>

						<li style="float:right;"><a href="/Users/Logout">Logout</a></li>
						<li><a href="/Users/view_my_own_profile"><?php echo $authUser['name'];?></a></li>
						
						<?php }?>
						
						<?php if(!$authUser) {?>

						<li id="textfornavbar"><a href="/Users/Login">Login</a></li>
						<li id="textfornavbar"><a href="/Users/Register">Register</a></li> 
						
						<?php } ?>

					</ul>

				</div>

			</div>

		</div>

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>

		<div id="textfornavbar" class="navbar navbar-default navbar-fixed-bottom" style="height: 5px;">
			
			<div class="container" style="margin-top: -8px;">

				<div class="col-lg-5 navbar-text pull-left" style="top: 8px;">
					Site built by Hashkit Team @2014
				</div>

				<div class="col-lg-5 pull-right">
					<a class="navbar-text btn btn-danger pull-right" href="http://hashkitproject.blogspot.sg/"><font style="color:#FFFFFF">Visit our blog!</font></a>
				</div>

			</div>

		</div>

	</body>

</html>