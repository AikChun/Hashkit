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

	  	<?php 
	  		echo $this->Html->script('jquery-2.1.0.js');
	  		echo $this->Html->script('bootstrap.js');
			//$this->Js->JqueryEngine->jQueryObject = '$j';
			// echo $this->Html->scriptBlock(
   //  			'var $j = jQuery.noConflict();',
   //  			array('inline' => false)
			// );

			echo $this->Html->meta(
    			'viewport',
    			'width=device-width, initial-scale=1.0'
			);

	  		//echo $this->Html->charset(); 
			//echo $this->Html->meta('icon');
			//echo $this->Html->css('new');
			echo $this->Html->css(array('bootstrap','styles'));
			echo $this->fetch('script');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			
			
	  	?>

	  	<title>
			<?php echo $cakeDescription ?>
			<?php echo $title_for_layout; ?>
	  	</title>

		

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
				<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-left">
						<li class = "active"><a href = "#">Home</a></li>
						<?php if(!empty($authUser)) :?>
						<li class = "dropdown">
								<a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Hash functions <b class = "caret"></b></a>
								<ul class = "dropdown-menu">
									<li><a href="#">Begin a Test</a></li>
									<li><a href="/pages/hash_function_properties">Security properties</a></li>
								</ul>
						</li>
						<li><a href = "#">Sources</a></li>
						<?php endif;?>
						<li><a href = "#">About Us</a></li>
						<li><a href = "#">Contact Us</a></li>
						<li><a href = "#">Help</a></li>
						<li><a href = "http://hashkitproject.blogspot.sg">Blog</a></li>
				</ul>
				<ul class = "nav navbar-nav navbar-right">

						<?php if($authUser):?>
						
							<li style="float:right;"><a href="/Users/Logout"> Logout</a></li>
							<li style="float:right;"><a> | </a></li>
							<li style="float:right;"><a href="/"><?php echo $authUser['name'];?></a></li>
						
						<?php endif;?> 
						

						<?php if(!$authUser):?>
							<li style="float:right;"><a href="/Users/Login">Login</a></li>
							<li style="float:right;"><a> | </a></li>
							<li style="float:right;"><a href="/Users/Register">Register</a></li> 
						<?php endif;?>
				</ul>
				</div>
			</div>

		</div>
	</div>	
		<?php echo $this->fetch('content'); ?>

		</div>

		<nav class = "navbar navbar-default navbar-static-bottom" role ="navigation">
			<div class = "container">
				<a href ="/pages/index" class = "navbar-button navbar-text ">Hashkit</a>
				<a href="/pages/index" class = "navbar-button navbar-text">Home</a>
				<a href="%" class = "navbar-button navbar-text">Hash functions</a>
				<a href="%" class = "navbar-button navbar-text">Sources</a>
				<a href="%" class = "navbar-button navbar-text">About Us</a>
				<a href="%" class = "navbar-button navbar-text">Contact</a>
				<a href="%" class = "navbar-button navbar-text">Help</a>
				<a href="%" class = "navbar-button navbar-text">Blog</a>
				<li class ="navbar-text" style="float:right;"><p>2014 HashKit project</p></li>
			</div>
		</nav>
	
	</body>

</html>